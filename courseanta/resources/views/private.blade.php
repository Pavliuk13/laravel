@extends('layouts.app')

@section('title-block')Private сторінка@endsection
@section('style')
    <link rel="stylesheet" href="/css/private.css">
@endsection

@section('content')
    <form>
        <div class="wrapper">
            <div class="logo">
                <img src="/img/ava.png" alt="Pyatov">
                <h1>{{$user->name}}</h1>
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="user-name">Прізвище та ім'я</label>
                    <input id="user_name" type="text" placeholder="{{$user->name}}">
                </div>
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user_name" type="text" placeholder="{{$user->username}}">
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="{{$user->email}}">
                </div>
                <div class="buttons">
                    <button type="submit">ОНОВИТИ</button>
                    <button type="submit"><a href="/logout" class="continue">ВИЙТИ</a></button>
                </div>
            </div>
        </div>

    </form>
@endsection
