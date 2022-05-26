@extends('layouts.app')

@section('title-block')Наші курси@endsection
@section('style')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')
    <div class="container-d">
        <h1>ВАШІ КУРСИ</h1>
        <div class="courses">
            @foreach($courses as $el)
                <div class="item">
                    <div class="header">
                        <div class="category">{{$el->category->name}}</div>
                        <div class="price">{{$el->price}}$</div>
                    </div>
                    <div class="image">
                        <img src="{{$el->image_path}}" alt="C#">
                    </div>
                    <h1>{{$el->title}}</h1>
                    <div class="action">
                        <button><a href="/course/{{$el->id}}">ВІДКРИТИ</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
