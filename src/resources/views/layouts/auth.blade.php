<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <header  class="header">
        <div class="header-text">
            <img src="{{asset('img/logo.svg')}}" alt="ロゴ">
        </div>
    </header>
    <div class="main">
        <h2 class="inner-header">
            @yield('title')
        </h2>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>