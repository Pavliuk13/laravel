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
                        Дата виходу: {{date("Y-m-d", strtotime($course->date_creation))}}
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
                    @if($exist_in_cart)
                        <form method="post" action="{{ route('remove_cart', $course->id) }}">
                            @csrf
                            <input type="text" name="id" hidden value="{{$course->id}}">
                            <button type="submit">ВИДАЛИТИ З КОШИКА</button>
                            <button><a href="/courses">НАЗАД ДО КУРСІВ</a></button>
                        </form>
                    @else
                        <form method="post" action="{{ route('cart', $course->id) }}">
                            @csrf
                            <input type="text" name="id" hidden value="{{$course->id}}">
                            <button type="submit">ДОДАТИ В КОШИК</button>
                            <button><a href="/courses">НАЗАД ДО КУРСІВ</a></button>
                        </form>
                    @endif
                </div>
                <p>{{$course->description}}</p>
            </div>
            <h2>ВІДГУКИ</h2>

            @auth
            <form class="comments" method="post" action="{{ route('comment', $course->id) }}">
                @csrf
                <input type="text" name="course_id" hidden value="{{$course->id}}">
                <textarea name="description" placeholder="Напишіть відгук..."></textarea>
                <button type="submit">Надіслати</button>
            </form>
            @endauth

            <div class="testimonials">
                @foreach($comments as $comment)
                    <form method="post" action="{{ route('delete_comment', $course->id) }}">
                        @csrf
                        <input hidden value="{{$comment->id}}" name="comment_id">
                        <input hidden value="{{$course->id}}" name="course_id">
                        <div class="item">
                            <div class="user">
                                <div class="image">
                                    <img src="../img/{{$comment->user->image_path}}" alt="logo">
                                </div>
                                <div class="name">
                                    <a href="./user.html">{{$comment->user->name}}</a>
                                    @if($comment->user->id === auth()->id())
                                        <button class="delete-button" type="submit">Видалити коментар</button>
                                    @endif
                                </div>
                            </div>
                            <p>
                                {{$comment->description}}
                            </p>
                            <div class="date">
                                {{date("Y-m-d", strtotime($comment->created))}}
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>

    </div>
@endsection
