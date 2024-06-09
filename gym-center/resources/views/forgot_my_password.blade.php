@extends('examples.layout')

@section('title', 'Kaydol')

@section('form')
    <h2>Şifreni Sıfırla</h2>
    <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <label for="password2">Şifreyi Doğrula:</label>
        <input type="password" id="password" name="password2" required>
        <br>
        Oturum <a href="{{route('login')}}">Aç</a>?

        <input type="submit" value="Kayıt Ol">
    </form>
@endsection
