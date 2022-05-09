@extends('layouts.forms')

@section('title-block')Реєстрація@endsection
@section('style')
    <link rel="stylesheet" href="/css/sign-in.css">
@endsection

@section('content')
    <form>
        <div class="wrapper">
            <div class="logo">
                <img src="/img/logo-2.png" alt="logo">
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user_name" type="text" placeholder="Введіть ім'я користувача">
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="example@email.com">
                </div>
                <div class="input-item">
                    <label for="pass">Пароль</label>
                    <input id="pass" type="password" placeholder="Введіть пароль">
                    <label class="desc">Забули пароль? Тисніть <a href="#">сюди</a></label>
                </div>
                <div class="buttons">
                    <a href="/" class="back">Назад</a>
                    <a href="#" class="continue">Реєстрація</a>
                </div>
            </div>
        </div>

    </form>
@endsection
