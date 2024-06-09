<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Message;
use App\Models\Saloon;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isNull;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function home() {
        return view('home');
    }

    function login() {
        return view('login');
    }

    function registration() {
        return view('registration');
    }

    function forgot_my_password() {
        return view('forgot_my_password');
    }

    function addUser() {
        return view('functions.addUser');
    }

    function updateUser() {
        return view('functions.updateUser');
    }

    function deleteUser() {
        return view('functions.deleteUser');
    }

    function showAllUsers() {
        $users = User::all();

        return view('functions.showAllUsers', compact('users'));
    }

    function addSaloon() {
        return view('functions.addSaloon');
    }

    function updateSaloon() {
        return view('functions.updateSaloon');
    }

    function deleteSaloon() {
        return view('functions.deleteSaloon');
    }

    function showAllSaloons() {
        $saloons = Saloon::all();

        return view('functions.showAllSaloons', compact('saloons'));
    }

    function addAnnouncement() {
        return view('functions.addAnno');
    }

    function editLastAnnouncement() {
        $announcement = Announcement::latest()->first();

        return view('functions.editLastAnno', compact('announcement'));
    }

    function showAllAnnouncements() {
        $announcements = Announcement::all();

        return view('functions.showAllAnno', compact('announcements'));
    }

    function messageChat(Request $request) {
        $userId = Auth::id();

        $conversations = Message::where('receiver_id', $userId)->groupBy('sender_id')
            ->select('sender_id', DB::raw('MAX(created_at) as last_message_time'))->get();

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)->orderByDesc('created_at')->first();
            $conversation->last_message_content = $lastMessage->content;
        }

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where(function ($query) use ($conversation, $userId) {
                $query->where('sender_id', $conversation->sender_id)
                      ->where('receiver_id', $userId);
            })
            ->orWhere(function ($query) use ($conversation, $userId) {
                $query->where('receiver_id', $conversation->sender_id)
                      ->where('sender_id', $userId);
            })
            ->orderByDesc('created_at')
            ->first();

            $conversation->last_message_content = $lastMessage ? $lastMessage->message : null;
        }

        foreach ($conversations as $conversation) {
            $user = User::find($conversation->sender_id);
            $conversation->sender_email = $user->email;

            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)
                ->orderByDesc('created_at')
                ->first();

            $conversation->last_message_time = $lastMessage && $lastMessage->created_at ? $lastMessage->created_at->diffForHumans() : null;
        }

        $userId = $request->sender_id;

        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return view('functions.messageChat', compact('messages', 'conversations', 'userId'));
    }

    function messages() {
        $userId = Auth::id();

        $conversations = Message::where('receiver_id', $userId)->groupBy('sender_id')
            ->select('sender_id', DB::raw('MAX(created_at) as last_message_time'))->get();

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)->orderByDesc('created_at')->first();
            $conversation->last_message_content = $lastMessage->content;
        }

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where(function ($query) use ($conversation, $userId) {
                $query->where('sender_id', $conversation->sender_id)
                      ->where('receiver_id', $userId);
            })
            ->orWhere(function ($query) use ($conversation, $userId) {
                $query->where('receiver_id', $conversation->sender_id)
                      ->where('sender_id', $userId);
            })
            ->orderByDesc('created_at')->first();

            $conversation->last_message_content = $lastMessage ? $lastMessage->message : null;
        }

        foreach ($conversations as $conversation) {
            $user = User::find($conversation->sender_id);
            $conversation->sender_email = $user->email;

            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)
                ->orderByDesc('created_at')
                ->first();

            $conversation->last_message_time = $lastMessage && $lastMessage->created_at ? $lastMessage->created_at->diffForHumans() : null;
        }


        return view('functions.messages', compact('conversations'));
    }

    function registrationPost(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password2' => 'required'
        ]);

        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        if ($request->password == $request->password2) {
            $user = User::create($data);
        } else {
            return redirect(route('registration'))->with('error', 'Şifreler eşleşmiyor');
        }

        if(!$user){
            return redirect(route('registration'))->with('error', 'Kayıt başarısız, tekrar deneyin');
        }
        return redirect(route('login'))->with('success', 'Kayıt işlemi başarıyla tamamlandı');
    }

    function forgot_my_passwordPost(Request $request) {
        $request->validate([
            'email' => 'required|email:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect(route('forgot_my_password'))->withErrors(['email' => 'E-posta adresi bulunamadı.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('login'))->with('success', 'Şifreniz başarıyla sıfırlandı.');
    }

    function addUserPost(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role']
        ]);

        if(!$user){
            return redirect(route('addUser'))->with('error', 'Kullanıcı eklenemedi, tekrar deneyin');
        }
        return redirect(route('addUser'))->with('success', 'Kullanıcı başarıyla eklendi');
    }

    function updateUserPost(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        $user = User::where('email', $validatedData['email'])->firstOrFail();

        $updateData = [];
        if (isset($validatedData['password'])) {
            $updateData['password'] = Hash::make($validatedData['password']);
        }
        if (isset($validatedData['role'])) {
            $updateData['role'] = $validatedData['role'];
        }

        $user->update($updateData);

        return redirect(route('updateUser'))->with('success', 'Kullanıcı bilgileri başarıyla güncellendi.');
    }

    function deleteUserPost(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $validatedData['email'])->firstOrFail();

        $user->delete();

        return redirect(route('deleteUser'))->with('success', 'Kullanıcı başarıyla silindi.');
    }

    function addSaloonPost(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'monthly_price' => 'required',
            'active_member' => 'required',
            'description' => 'required',
        ]);

        $Saloon = Saloon::create([
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'monthly_price' => $validatedData['monthly_price'],
            'active_member' => $validatedData['active_member'],
            'description' => $validatedData['description']
        ]);

        if(!$Saloon){
            return redirect(route('addSaloon'))->with('error', 'Otel kayıt işlemi gerçekleştirilemedi, tekrar deneyiniz');
        }
        return redirect(route('addSaloon'))->with('success', 'Otel başarıyla kayıt edildi');
    }

    function updateSaloonPost(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|exists:saloons,name',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'monthly_price' => 'required|numeric',
            'active_member' => 'required|integer',
            'description' => 'nullable|string'
        ]);

        $saloon = Saloon::where('name', $validatedData['name'])->firstOrFail();

        if (is_null($saloon)) {
            // Eğer saloon bulunamazsa hata mesajıyla yönlendir
            return redirect(route('updateSaloon'))->with('error', 'Girdiğiniz otel sistemde kayıtlı değil.');
        }

        // Güncellenmesi gereken veriler
        $updateData = [
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'monthly_price' => $validatedData['monthly_price'],
            'active_member' => $validatedData['active_member'],
            'description' => $validatedData['description']
        ];

        // Saloon kaydını güncelle
        $saloon->update($updateData);

        // Başarı mesajıyla yönlendir
        return redirect(route('updateSaloon'))->with('success', 'Otelin bilgileri başarıyla güncellendi.');
    }


    function addAnnouncementPost(Request $request) {
        $validatedData = $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'description' => 'nullable',
        ]);

        $announcement = Announcement::create([
            'tittle' => $validatedData['tittle'],
            'content' => $validatedData['content'],
            'description' => $validatedData['description']
        ]);

        if(!$announcement){
            return redirect(route('addAnnouncement'))->with('error', 'Duyuru eklenemedi, tekrar deneyiniz');
        }
        return redirect(route('addAnnouncement'))->with('success', 'Duyuru başarıyla eklendi');
    }

    function editLastAnnouncementPost(Request $request) {
        $validatedData = $request->validate([
            'tittle' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);

        $announcement = Announcement::latest()->first();

        $updateData = [];
        if (isset($validatedData['tittle'])) {
            $updateData['tittle'] = $validatedData['tittle'];
        }
        if (isset($validatedData['content'])) {
            $updateData['content'] = $validatedData['content'];
        }
        if (isset($validatedData['description'])) {
            $updateData['description'] = $validatedData['description'];
        }

        if (isNull($announcement)) {
            return redirect(route('editLastAnnouncement'))->with('error', 'Sistemde herhangi bir duyuru bulunamadı');
        } else {
            $announcement->update($updateData);
            return redirect(route('editLastAnnouncement'))->with('success', 'Son duyuru başarıyla güncellendi');
        }
    }

    function messageChatPost(Request $request) {
        $validatedData = $request->validate([
            'message' => 'required',
            'sender_id' => 'required',
            'receiver_id' => 'required',
        ]);

        $message_sender = $request->sender_id;

        $message = Message::create([
            'message' => $validatedData['message'],
            'sender_id' => $validatedData['sender_id'],
            'receiver_id' => $validatedData['receiver_id']
        ]);
        $userId = Auth::id();

        $conversations = Message::where('receiver_id', $userId)->groupBy('sender_id')
            ->select('sender_id', DB::raw('MAX(created_at) as last_message_time'))->get();

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)->orderByDesc('created_at')->first();
            $conversation->last_message_content = $lastMessage->content;
        }

        foreach ($conversations as $conversation) {
            $lastMessage = Message::where(function ($query) use ($conversation, $userId) {
                $query->where('sender_id', $conversation->sender_id)
                      ->where('receiver_id', $userId);
            })
            ->orWhere(function ($query) use ($conversation, $userId) {
                $query->where('receiver_id', $conversation->sender_id)
                      ->where('sender_id', $userId);
            })
            ->orderByDesc('created_at')
            ->first();

            $conversation->last_message_content = $lastMessage ? $lastMessage->message : null;
        }

        foreach ($conversations as $conversation) {
            $user = User::find($conversation->sender_id);
            $conversation->sender_email = $user->email;

            $lastMessage = Message::where('sender_id', $conversation->sender_id)
                ->where('receiver_id', $userId)
                ->orderByDesc('created_at')
                ->first();

            $conversation->last_message_time = $lastMessage && $lastMessage->created_at ? $lastMessage->created_at->diffForHumans() : null;
        }

        $userId = $request->receiver_id;

        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        if(!$message){
            return redirect(route('messageChat'))->with('error', 'Mesaj iletilemedi, tekrar deneyiniz');
            }
            return view('functions.messageChat', compact('message_sender', 'messages','conversations'));
    }

    function messageChatHomePost(Request $request) {
        $validatedData = $request->validate([
            'message' => 'required',
            'sender_id' => 'required',
            'receiver_id' => 'required',
        ]);

        Message::create([
            'message' => $validatedData['message'],
            'sender_id' => $validatedData['sender_id'],
            'receiver_id' => $validatedData['receiver_id']
        ]);

        return view('home');
    }

    function Saloondetails() {
        $Saloons = Saloon::all();

        return view('kullanici_Saloon', compact('Saloons'));
    }

    public function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin_panel');
            } else {
                return redirect()->route('user_panel');
            }
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }
}
