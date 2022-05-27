@extends('layouts.app')

@section('title-block')Наші курси@endsection
@section('style')
    <link rel="stylesheet" href="/css/course.css">
@endsection

@section('content')
    <div class="container-d">
        <div class="course">
            <div class="header">
                <div class="data">
                    <h1>
                        {{$course->title}}
                    </h1>
                    <div class="author">
                        Категорія: {{$course->category->name}}
                    </div>
                    <div class="date">
                        Дата виходу: 10.01.2022
                    </div>
                </div>
                <div class="price">
                    {{$course->price}}$
                </div>
            </div>
            <div class="about">
                <div class="actions">
                    <div class="image">
                        <img src="{{$course->image_path}}" alt="C#">
                    </div>
                    <form method="post" action="{{ route('home.cart', $course->id) }}">
                        @csrf
                        <input type="text" name="id" hidden value="{{$course->id}}">
                        <button type="submit">ДОДАТИ В КОШИК</button>
                        <button><a href="/courses">НАЗАД ДО КУРСІВ</a></button>
                    </form>
                </div>
                <p>{{$course->description}}</p>
            </div>
            <h2>ВІДГУКИ</h2>

            @auth
            <form class="comments" method="post" action="{{ route('home.comment', $course->id) }}">
                @csrf
                <input type="text" name="course_id" hidden value="{{$course->id}}">
                <textarea name="description" placeholder="Напишіть відгук..."></textarea>
                <button type="submit">Надіслати</button>
            </form>
            @endauth

            <div class="testimonials">
                @foreach($comments as $comment)
                    <div class="item">
                        <div class="user">
                            <div class="image">
                                <img src="../img/pyatov.png" alt="Pyatov">
                            </div>
                            <div class="name">
                                <a href="./user.html">{{$comment->user->name}}</a>
                            </div>
                        </div>
                        <p>
                            {{$comment->description}}
                        </p>
                        <div class="date">
                            {{date("Y-m-d", strtotime($comment->created))}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
