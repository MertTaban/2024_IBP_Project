@extends('examples.layout')

@section('title', 'Giriş Yap')

@section('form')
    <h2>Sisteme Giriş Yap</h2>
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password" required>
        <br>
        Yeni bir kullanıcı <a href="{{route('registration')}}">mısın</a>?

        <input type="submit" value="Giriş Yap">
    </form>
@endsection
