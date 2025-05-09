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
        <h1 class="header-text">COACHTECH</h1>
        <nav class="link">
            <form action="/search" method="post">
                <input type="text" name="keyword">
            </form>
            <form action="/logout" method="post">
            @csrf
                <button>
                    <p style="color:#fff">ログアウト</p>
                </button>
            </form>
            <div>
                <a href="/mypage">マイページ</a>
            </div>
            <div>
                <a href="/sell">出品</a>
            </div>
        </nav>
    </header>
    <div class="middle">
        @yield('middle')
    </div>
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