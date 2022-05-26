@extends('layouts.app')

@section('title-block')Наші курси@endsection
@section('style')
    <link rel="stylesheet" href="/css/courses.css">
@endsection

@section('content')
    <div class="container-d">
        <div class="buttons">
            <button type="button" class="filter-button" data-filter="all">УСІ КУРСИ</button>
            @foreach($categories as $el)
                <button type="button" class="filter-button" data-filter="{{str_replace(" ", "_", $el->name)}}">{{strtoupper($el->name)}}</button>
            @endforeach
        </div>

        <div class="courses">
            @foreach($courses as $el)
                <div class="item filter {{str_replace(" ", "_", $el->category->name)}}">
                    <div class="header">
                        <div class="category">{{$el->category->name}}</div>
                        <div class="price">{{$el->price}}$</div>
                    </div>
                    <div class="image">
                        <img src="{{$el->image_path}}" alt="C#">
                    </div>
                    <h1>{{$el->title}}</h1>
                    <p>{{mb_substr($el->description, 0, 328)}}...</p>
                    <div class="action">
                        <button><a href="/course/{{$el->id}}">ДЕТАЛЬНІШЕ</a></button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pointers">
            <img src="/img/left.png" alt="left">
            <img src="/img/right.png" alt="right">
        </div>
    </div>
@endsection
