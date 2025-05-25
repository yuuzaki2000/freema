<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    <div>
        <div style="display: flex; border-bottom:1px solid #000">
            <div>
                <img src="{{asset('img/golf_bag.jpg')}}" alt="">
            </div>
            <div>
                <p>{{$product->name}}</p>
                <p>{{$product->price}}</p>
            </div>
        </div>
    </div>
    <livewire:bind id="{{$product->id}}">
    @livewireScripts
</body>
</html>