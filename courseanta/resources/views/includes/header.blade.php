@section('header')
    <header>
        <div class="container-d">
            <div class="header-body">
                <a href="/" class="header-logo">
                    <img src="/img/logo.png" alt="logo">
                </a>
                <div class="header-burger">
                    <span></span>
                </div>
                <nav class="header-menu">
                    <ul class="header-list">
                        <li><a href="/" class="header-link">ГОЛОВНА</a></li>
                        <li><a href="/about" class="header-link">ПРО НАС</a></li>
                        <li><a href="/courses" class="header-link">НАШІ КУРСИ</a></li>

                        @guest
                            <li><a href="/sign-up" class="header-link">РЕЄСТРАЦІЯ</a></li>
                            <li><a href="/sign-in" class="header-link">УВІЙТИ</a></li>
                        @endguest
                        @auth
                            <li><a href="/cart" class="header-link"><i class="fa-solid fa-cart-shopping"></i></a></li>
                            <li><a href="/private" class="header-link">{{auth()->user()->username}}</a></li>
                        @endauth

                    </ul>
                </nav>
            </div>
        </div>
    </header>
