@extends('layouts.app')

@section('title-block')Private сторінка@endsection
@section('style')
    <link rel="stylesheet" href="/css/private.css">
@endsection

@section('content')
    <form method="post" action="{{ route('home.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="wrapper">
            <div class="logo">
                @if($user->image_path == null)
                    <img src="/img/default.png" alt="avatar">
                @else
                    <img src="/img/{{$user->image_path}}" alt="avatar">
                @endif
                <h1>{{$user->name}}</h1>
            </div>
            <div class="input-list">
                <div class="input-item">
                    <label for="name">Прізвище та ім'я</label>
                    <input id="name" name="name" type="text" value="{{$user->name}}">
                </div>
                <div class="input-item">
                    <label for="user-name">Ім'я користувача</label>
                    <input id="user-name" name="username" type="text" value="{{$user->username}}">
                </div>
                <div class="input-item">
                    <label for="file">Змінити зображення</label>
                    <input id="file" class="custom-file-input" name="file" type="file">
                </div>
                <div class="input-item">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{$user->email}}">
                </div>
                <div class="buttons">
                    <button type="submit">ОНОВИТИ</button>
                    <button><a href="/logout" class="continue">ВИЙТИ</a></button>
                </div>
            </div>
        </div>

    </form>
@endsection
