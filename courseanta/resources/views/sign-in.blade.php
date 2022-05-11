@extends('layouts.forms')

@section('title-block')Увійти@endsection
@section('style')
    <link rel="stylesheet" href="/css/sign-in.css">
@endsection

@section('content')
    <form method="post" action="{{ route('sign-in.perform') }}">
        @csrf
        <div class="wrapper">
            <div class="logo">
                <img src="/img/logo-2.png" alt="logo">
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user_name" type="text" name="username" placeholder="Введіть ім'я користувача">
                    @error('username')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="example@email.com">
                    @error('email')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="pass">Пароль</label>
                    <input id="pass" type="password" name="password" placeholder="Введіть пароль">
                    <label class="desc">Забули пароль? Тисніть <a href="#">сюди</a></label>
                    @error('password')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="buttons">
                    <a href="/" class="back">Назад</a>
                    <button type="submit" name="send">Увійти</button>
                </div>
            </div>
        </div>

    </form>
@endsection
