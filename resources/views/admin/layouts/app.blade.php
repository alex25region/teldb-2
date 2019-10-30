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

<nav class="navbar navbar-dark fixed bg-dark flex-md-nowrap p-3 shadow">
    <a class="navbar-brand" href="">
        <img src="{{ asset('img/tel00red.ico') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        TELDB-25
    </a>
{{--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        @include('admin.layouts.right-menu')
        @yield('content')
    </div>
</div>

</body>
</html>