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
            <div class="testimonials">
                <div class="item">
                    <div class="user">
                        <div class="image">
                            <img src="../img/pyatov.png" alt="Pyatov">
                        </div>
                        <div class="name">
                            <a href="./user.html">Андрій Пятов</a>
                        </div>
                    </div>
                    <p>
                        Curabitur sed augue laoreet metus luctus egestas. Donec id lacus euismod, ullamcorper justo porta, placerat enim. Suspendisse sit amet consequat nunc. Nulla vel pulvinar neque, in viverra turpis. Pellentesque nunc orci, dapibus id lobortis id, volutpat vitae arcu. Curabitur in ex ligula. Praesent eu elementum odio. Donec tincidunt quam sit amet malesuada elementum. Quisque posuere mattis elementum. Nulla facilisi. Ut lacinia arcu tortor, a fringilla lectus finibus ac. Vestibulum efficitur scelerisque orci, sed ullamcorper velit varius et. Cras vitae condimentum lacus.
                    </p>
                    <div class="date">
                        13.04.2022, 5:44 PM
                    </div>
                </div>
                <div class="item">
                    <div class="user">
                        <div class="image">
                            <img src="../img/sedan.png" alt="Sedan">
                        </div>
                        <div class="name">
                            <a href="#">Влада Седан</a>
                        </div>
                    </div>
                    <p>
                        Curabitur sed augue laoreet metus luctus egestas. Donec id lacus euismod, ullamcorper justo porta, placerat enim. Suspendisse sit amet consequat nunc. Nulla vel pulvinar neque, in viverra turpis. Pellentesque nunc orci, dapibus id lobortis id, volutpat vitae arcu. Curabitur in ex ligula. Praesent eu elementum odio. Donec tincidunt quam sit amet malesuada elementum. Quisque posuere mattis elementum. Nulla facilisi. Ut lacinia arcu tortor, a fringilla lectus finibus ac. Vestibulum efficitur scelerisque orci, sed ullamcorper velit varius et. Cras vitae condimentum lacus.
                    </p>
                    <div class="date">
                        21.03.2022, 10:44 AM
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
