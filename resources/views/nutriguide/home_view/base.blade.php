<!doctype html>
<html lang="en-us">

@include('nutriguide.home_view.partials.head')

<body class="has-animations">
<!-- Header -->
<header class="align--center pt3">
    <div class="container--lg border--bottom pb3 ">
        <a href="{{route('home')}}"><img class="logo mb3 reveal-on-scroll is-revealing" src="{{asset('../assets//img/logo.svg')}}" alt="Carta"></a>
        <h1 class="mb2">A new perspective on what you eat.</h1>
        @if(Route::has('login'))
            @auth
                <span>
                <a href="{{route('dashboard')}}" class="link"><button class="btn btn--secondary">Dashboard</button></a>
                </span>
                <span>
            @else
        <span>
                <a href="{{route('login')}}" class="link"><button class="btn btn--secondary">Login</button></a>
            </span>
        <span>
                <a href="{{route('register')}}" class="link"><button class="btn btn--warning">Register</button></a>
            </span>
            @endauth
        @endif
    </div>
</header>

<main>
    @yield('content')
</main>

<!-- Footer -->
@include('nutriguide.home_view.partials.scripts')
</body>
</html>
