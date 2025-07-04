@extends('layouts.app_slim')

@section('css')
<link rel="stylesheet" href="{{asset('css/listing.css')}}">
@livewireStyles

@section('content')
<div>
    <div>
        <h2>商品の出品</h2>
    </div>
    <div>
        <img src="{{asset($imageFilePath)}}" alt="サンプル画像" width="200px">
    </div>
    <form action="/sell" method="post" enctype="multipart/form-data">
    @csrf
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <h3 class="h3">商品の詳細</h3>
        </div>
        <div>
            <input type="hidden" name="image" value="storage/product_img/uranai_tarot_card.png">
        </div>
        @error('image')
        <div>
            <p>{{$errors->first('image')}}</p>
        </div>
        @enderror
        {{--
        <div class="">
            <div>
                <h4>カテゴリー</h4>
            </div>
            <div class="checkbox-group"> 
                <div>
                    <input type="checkbox" name="category[]" value="1" id="fashion" class="checkbox-fashion">
                    <label for="fashion" class="btn-label-fashion"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="2" id="home-appliance" class="checkbox-home-appliance">
                    <label for="home-appliance" class="btn-label-home-appliance"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="3" id="interior" class="checkbox-interior">
                    <label for="interior" class="btn-label-interior"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="4" id="ladies" class="checkbox-ladies">
                    <label for="ladies" class="btn-label-ladies"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="5" id="mens" class="checkbox-mens">
                    <label for="mens" class="btn-label-mens"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="6" id="cosmetics" class="checkbox-cosmetics">
                    <label for="cosmetics" class="btn-label-cosmetics"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="7" id="books" class="checkbox-books">
                    <label for="books" class="btn-label-books"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="8" id="games" class="checkbox-games">
                    <label for="games" class="btn-label-games"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="9" id="sports" class="checkbox-sports">
                    <label for="sports" class="btn-label-sports"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="10" id="kitchen" class="checkbox-kitchen">
                    <label for="kitchen" class="btn-label-kitchen"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="11" id="handmade" class="checkbox-handmade">
                    <label for="handmade" class="btn-label-handmade"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="12" id="accessories" class="checkbox-accessories">
                    <label for="accessories" class="btn-label-accessories"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="13" id="toys" class="checkbox-toys">
                    <label for="toys" class="btn-label-toys"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="14" id="babiesAndKids" class="checkbox-babiesAndKids">
                    <label for="babiesAndKids" class="btn-label-babiesAndKids"></label>
                </div>
            </div>
            @error('category')
            <div>
                <p>{{$errors->first('category')}}</p>
            </div>
            @enderror
        </div>
        --}}
        <div class="condition-part">
            <div>
                <h4>商品の状態</h4>
            </div>
            <div>
                <select name="condition">
                    <option value="良好">良好</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="状態が悪い">状態が悪い</option>
                </select>
            </div>
            @error('condition')
            <div>
                <p>{{$errors->first('condition')}}</p>
            </div>   
            @enderror
        </div>
        <div>
            <h3 class="h3">商品名と説明</h3>
        </div>
        <div class="name-part">
            <div>
                <h4>商品名</h4>
            </div>
            <div>
                <input type="text" name="name">
            </div>
            @error('name')
            <div>
                <p>{{$errors->first('name')}}</p>
            </div>   
            @enderror
        </div>
        <div class="brand-part">
            <div>
                <h4>ブランド名</h4>
            </div>
            <div>
                <input type="text" name="brand">
            </div>
            @error('brand')
            <div>
                <p>{{$errors->first('brand')}}</p>
            </div>
            @enderror
        </div>
        <div class="description-part">
            <div>
                <h4>商品の説明</h4>
            </div>
            <div>
                <input type="text" name="description">
            </div>
            @error('description')
            <div>
                <p>{{$errors->first('description')}}</p>
            </div>
            @enderror
        </div>
        <div class="price-part">
            <div>
                <h4>販売価格</h4>
            </div>
            <div>
                <input type="text" name="price">
            </div>
            @error('price')
            <div>
                <p>{{$errors->first('price')}}</p>
            </div>
                
            @enderror
        </div>
        <div>
            <button class="btn" type="submit">出品する</button>
        </div>
    </form>
    <livewire:chain>
    @livewireScripts
</div>    
@endsection