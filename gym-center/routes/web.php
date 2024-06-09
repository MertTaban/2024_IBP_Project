<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/panel', function () {
        return view('admin_panel');
    })->name('admin_panel');

    Route::get('/User/panel', function () {
        return view('kullanici_panel');
    })->name('user_panel');
});

Route::get('/home', [Controller::class, 'home'])->name('home');

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::post('/registration', [Controller::class, 'registrationPost'])->name('registration.post');
Route::get('/forgot_my_password', [Controller::class, 'forgot_my_password'])->name('forgot_my_password');
Route::post('/forgot_my_password', [Controller::class, 'forgot_my_passwordPost'])->name('forgot_my_password.post');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::get('/addUser', [Controller::class, 'addUser'])->name('addUser');
Route::post('/addUser', [Controller::class, 'addUserPost'])->name('addUser.post');
Route::get('/Userupdate', [Controller::class, 'updateUser'])->name('updateUser');
Route::post('/Userupdate', [Controller::class, 'updateUserPost'])->name('updateUser.post');
Route::get('/deleteUser', [Controller::class, 'deleteUser'])->name('deleteUser');
Route::post('/deleteUser', [Controller::class, 'deleteUserPost'])->name('deleteUser.post');
Route::get('/showallUsers', [Controller::class, 'showAllUsers'])->name('showAllUsers');

Route::get('/addSaloon', [Controller::class, 'addSaloon'])->name('addSaloon');
Route::post('/addSaloon', [Controller::class, 'addSaloonPost'])->name('addSaloon.post');
Route::get('/Saloonupdate', [Controller::class, 'updateSaloon'])->name('updateSaloon');
Route::post('/Saloonupdate', [Controller::class, 'updateSaloonPost'])->name('updateSaloon.post');
Route::get('/deleteSaloon', [Controller::class, 'deleteSaloon'])->name('deleteSaloon');
Route::post('/deleteSaloon', [Controller::class, 'deleteSaloonPost'])->name('deleteSaloon.post');
Route::get('/showallSaloons', [Controller::class, 'showAllSaloons'])->name('showAllSaloons');

Route::get('/addannouncement', [Controller::class, 'addAnnouncement'])->name('addAnnouncement');
Route::post('/addannouncement', [Controller::class, 'addAnnouncementPost'])->name('addAnnouncement.post');
Route::get('/editlastannouncement', [Controller::class, 'editLastAnnouncement'])->name('editLastAnnouncement');
Route::post('/editlastannouncement', [Controller::class, 'editLastAnnouncementPost'])->name('editLastAnnouncement.post');
Route::get('/showallannouncements', [Controller::class, 'showAllAnnouncements'])->name('showAllAnnouncements');

Route::get('/messages', [Controller::class, 'messages'])->name('messages');
Route::post('/messages', [Controller::class, 'messagesPost'])->name('messages.post');
Route::get('/chat', [Controller::class, 'messageChat'])->name('messageChat');
Route::post('/chat', [Controller::class, 'messageChatPost'])->name('messageChat.post');
Route::post('/homechat', [Controller::class, 'messageChatHomePost'])->name('messageChatHome.post');

Route::get('/usermessages', [Controller::class, 'usermessages'])->name('usermessages');
Route::post('/usermessages', [Controller::class, 'usermessagesPost'])->name('usermessages.post');
Route::get('/userchat', [Controller::class, 'usermessageChat'])->name('usermessageChat');
Route::post('/userchat', [Controller::class, 'usermessageChatPost'])->name('usermessageChat.post');
Route::get('/usershowallannouncements', [Controller::class, 'usershowAllAnnouncements'])->name('usershowAllAnnouncements');
