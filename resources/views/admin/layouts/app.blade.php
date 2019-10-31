<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-3 shadow">
    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
        <img src="{{ asset('img/tel00red.ico') }}" width="25" class="d-inline-block align-top" alt="">
        TELDB-25
    </a>
{{--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>&nbsp;Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i>&nbsp;Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.posts.index') }}"><i class="fa fa-address-card"></i>&nbsp;Posts</a>
        </li>
        <li class="nav-item">

            <a class="nav-link text-white" href="{{ route('admin.otdels.index') }}"><i class="fa fa-building"></i>&nbsp;Otdels</a>
        </li>
    </ul>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="content-wrapper ">
{{--        @include('admin.layouts.right-menu')--}}
        @yield('content')
    </div>
</div>

</body>
</html>