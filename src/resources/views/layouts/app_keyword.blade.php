<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
    <header  class="header">
        <div class="header-text">
            <img src="{{asset('img/logo.svg')}}" alt="ロゴ">
        </div>
        <form action="/search" method="post">
        @csrf
            <input type="text" class="keyword-input" name="keyword" placeholder="    なにをお探しですか？" value="{{$keyword}}">
        </form>
        <nav class="link">
            <form class="logout-form" action="/logout" method="post">
            @csrf
                <button>
                    <p style="color:#fff">ログアウト</p>
                </button>
            </form>
            <form class="mypage-form" action="/mypage" method="get">
                @csrf
                <button>
                    <p style="color:#fff">マイページ</p>
                </button>
            </form>
            <form class="sell-form" action="/sell" method="get">
            @csrf
                <button class="sell-btn">
                    <p class="sell-txt">出品</p>
                </button>
            </form>
        </nav>
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