@extends('layouts.app')

@section('title-block')Наші курси@endsection
@section('style')
    <link rel="stylesheet" href="/css/courses.css">
@endsection

@section('content')
    <div class="container-d">
        <div class="buttons">
            <button>УСІ КУРСИ</button>
            @foreach($categories as $el)
                <button>{{strtoupper($el->name)}}</button>
            @endforeach
        </div>

        <div class="courses">
            <div class="item">
                <div class="header">
                    <div class="category">C#</div>
                    <div class="price">10$</div>
                </div>
                <div class="image">
                    <img src="/img/c-1.png" alt="C#">
                </div>
                <h1>Основи програмування на мові С#</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="/course">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">Python</div>
                    <div class="price">5$</div>
                </div>
                <div class="image">
                    <img src="/img/c-2.png" alt="Python">
                </div>
                <h1>Основи програмування на мові Python</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">C++</div>
                    <div class="price">15$</div>
                </div>
                <div class="image">
                    <img src="/img/c-3.png" alt="C++">
                </div>
                <h1>Основи програмування на мові С++</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">Java</div>
                    <div class="price">10$</div>
                </div>
                <div class="image">
                    <img src="/img/c-4.png" alt="Java">
                </div>
                <h1>Основи програмування на мові Java</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">Kotlin</div>
                    <div class="price">5$</div>
                </div>
                <div class="image">
                    <img src="/img/c-5.png" alt="C#">
                </div>
                <h1>Основи програмування на мові Kotlin</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">C#</div>
                    <div class="price">15$</div>
                </div>
                <div class="image">
                    <img src="/img/c-6.png" alt="C#">
                </div>
                <h1>Налаштування і робота з ASP.NET Core MVC</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">Kotlin</div>
                    <div class="price">10$</div>
                </div>
                <div class="image">
                    <img src="/img/c-7.png" alt="Kotlin">
                </div>
                <h1>Розробка додатків для Android з Kotlin</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">Python</div>
                    <div class="price">5$</div>
                </div>
                <div class="image">
                    <img src="/img/c-8.png" alt="Python">
                </div>
                <h1>Python + Django: з нуля до комерційних додатків</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
            <div class="item">
                <div class="header">
                    <div class="category">C++</div>
                    <div class="price">15$</div>
                </div>
                <div class="image">
                    <img src="/img/c-9.png" alt="C++">
                </div>
                <h1>Швидкий старт з Qt C++ у Visual Studio</h1>
                <p>Quisque vel mi eget tellus vehicula convallis. Sed ullamcorper ipsum metus, ac dapibus arcu fringilla sit amet. Nam sit amet justo quis nunc eleifend blandit. Phasellus quis libero condimentum, ornare ligula eget, fermentum nulla. Duis faucibus ac sapien nec lacinia. Sed gravida tincidunt sem eget interdum. Suspendisse potenti...</p>
                <div class="action">
                    <button><a href="#">ДЕТАЛЬНІШЕ</a></button>
                </div>
            </div>
        </div>
        <div class="pointers">
            <img src="/img/left.png" alt="left">
            <img src="/img/right.png" alt="right">
        </div>
    </div>
@endsection
