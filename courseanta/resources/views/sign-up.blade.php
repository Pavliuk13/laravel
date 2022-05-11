@extends('layouts.forms')

@section('title-block')Реєстрація@endsection
@section('style')
    <link rel="stylesheet" href="/css/sign-up.css">
@endsection

@section('content')
    <form method="post" action="{{ route('sign-up.perform') }}">
        @csrf
        <div class="wrapper">
            <div class="logo">
                <img src="/img/logo-2.png" alt="logo">
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="name">Прізвище та ім'я</label>
                    <input id="name" name="name" type="text" placeholder="Введіть текст">
                    @error('name')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user_name" name="username" type="text" placeholder="Створити ім'я користувача">
                    @error('username')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="example@email.com">
                    @error('email')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="pass">Пароль</label>
                    <input id="pass" name="password" type="password" placeholder="Придумайте пароль">
                    <label class="desc">Ваш пароль має містити хоча б 1 цифру, а також 1 літеру у верхньому регістрі</label>
                    @error('password')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-item">
                    <label for="confirm_pass">Підтвердити пароль</label>
                    <input id="confirm_pass" name="password_2" type="password" placeholder="Підтвердіть пароль">
                    <label class="desc">Паролі мають співпадати</label>
                    @error('password_2')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="buttons">
                    <button type="submit"><a href="/" class="back">Назад</a></button>
                    <button type="submit" name="send">Реєстрація</button>
                </div>
            </div>
        </div>
    </form>
@endsection
