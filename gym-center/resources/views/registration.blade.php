@extends('examples.layout')

@section('title', 'Kaydol')

@section('form')
    <h2>Sisteme Kayıt Ol</h2>
    <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autofocus>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>

        <label for="password">Şifreyi Doğrula:</label>
        <input type="password" id="password" name="password2" required>
        <br>
        Şifreni mi <a href="{{route('forgot_my_password')}}">Unuttun</a>?

        <input type="submit" value="Kayıt Ol">
    </form>
@endsection
