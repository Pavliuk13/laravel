@extends('layouts.forms')

@section('title-block')Реєстрація@endsection
@section('style')
    <link rel="stylesheet" href="/css/sign-up.css">
@endsection

@section('content')
    <form>
        <div class="wrapper">
            <div class="logo">
                <img src="/img/logo-2.png" alt="logo">
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="name">Прізвище та ім'я</label>
                    <input id="name" type="text" placeholder="Введіть текст">
                </div>
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user_name" type="text" placeholder="Створити ім'я користувача">
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="example@email.com">
                </div>
                <div class="input-item">
                    <label for="pass">Пароль</label>
                    <input id="pass" type="password" placeholder="Придумайте пароль">
                    <label class="desc">Ваш пароль має містити хоча б 1 цифру, а також 1 літеру у верхньому регістрі</label>
                </div>
                <div class="input-item">
                    <label for="confirm_pass">Підтвердити пароль</label>
                    <input id="confirm_pass" type="password" placeholder="Підтвердіть пароль">
                    <label class="desc">Паролі мають співпадати</label>
                </div>
                <div class="buttons">
                    <a href="/" class="back">Назад</a>
                    <a href="#" class="continue">Реєстрація</a>
                </div>
            </div>
        </div>
    </form>
@endsection
