<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css')}}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('images/someimage')}}" alt="web logo">
            <a href="{{ route('home') }}"><h2>inventory <span>system</span></h2></a>
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('service') }}">Service</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>

            <a href="{{ route('dashboard') }}">Dashboard </a>



        </div>

    </header>



        <!--page content  -->
@yield('content')

  <!-- footer layout file -->
@include('components.footer')
</body>
</html>
