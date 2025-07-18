<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
        <form action="/sell" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <div>
                        <h4>商品画像</h4>
                    </div>
                    <div>
                        <input type="file" class="file-button" name="file" wire:change="onChange($event.target.value)">
                        <div>
                            <img class="product-image" src="{{asset($image_url)}}" alt="商品画像" width="200px">
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="h3">商品の詳細</h3>
                </div>
                <div>
                    <input type="hidden" name="image" value="{{$image_url}}">
                </div>
                @error('image')
                <div>
                    <p>{{$errors->first('image')}}</p>
                </div>
                @enderror
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

            </div>
        </form>
    </div>
</div>
<style>
.product-image {
}

.file-button {
    border: 2px #D9D9D9 dotted;
    position: absolute;
    padding:100px 0px;
    height: 50px;
    width: 200px;
}

.file-button::file-selector-button {
    position: absolute;
    top: 50%;
    width:195px;
    color: #ff5555;
    background-color: #FFF;
    border: 1px solid #ff5555;
    border-radius: 10px;
    text-align: center;
}

.checkbox-group {
    display: flex;
    flex-wrap: wrap;
}

.btn-label-fashion {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
}

.btn-label-fashion::before {
    content: "ファッション";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-fashion {
    display: none;
}

.checkbox-fashion:checked+.btn-label-fashion {
    background-color: #FF5655;
}

.checkbox-fashion:checked+.btn-label-fashion::before {
    color: #FFF;
}

.btn-label-home-appliance {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-home-appliance::before {
    content: "家電";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-home-appliance {
    display: none;
}

.checkbox-home-appliance:checked+.btn-label-home-appliance {
    background-color: #FF5655;
}

.checkbox-home-appliance:checked+.btn-label-home-appliance::before {
    color: #FFF;
}

.btn-label-interior {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-interior::before {
    content: "インテリア";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-interior {
    display: none;
}

.checkbox-interior:checked+.btn-label-interior {
    background-color: #FF5655;
}

.checkbox-interior:checked+.btn-label-interior::before {
    color: #FFF;
}

.btn-label-interior {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-interior::before {
    content: "インテリア";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-interior {
    display: none;
}

.checkbox-interior:checked+.btn-label-interior {
    background-color: #FF5655;
}

.checkbox-interior:checked+.btn-label-interior::before {
    color: #FFF;
}

.btn-label-ladies {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-ladies::before {
    content: "レディース";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-ladies {
    display: none;
}

.checkbox-ladies:checked+.btn-label-ladies {
    background-color: #FF5655;
}

.checkbox-ladies:checked+.btn-label-ladies::before {
    color: #FFF;
}

.btn-label-mens {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-mens::before {
    content: "メンズ";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-mens {
    display: none;
}

.checkbox-mens:checked+.btn-label-mens {
    background-color: #FF5655;
}

.checkbox-mens:checked+.btn-label-mens::before {
    color: #FFF;
}

.btn-label-cosmetics {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-cosmetics::before {
    content: "コスメ";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-cosmetics {
    display: none;
}

.checkbox-cosmetics:checked+.btn-label-cosmetics {
    background-color: #FF5655;
}

.checkbox-cosmetics:checked+.btn-label-cosmetics::before {
    color: #FFF;
}

.btn-label-books {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-books::before {
    content: "ブック";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-books {
    display: none;
}

.checkbox-books:checked+.btn-label-books {
    background-color: #FF5655;
}

.checkbox-books:checked+.btn-label-books::before {
    color: #FFF;
}

.btn-label-games {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-games::before {
    content: "ゲーム";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-games {
    display: none;
}

.checkbox-games:checked+.btn-label-games {
    background-color: #FF5655;
}

.checkbox-games:checked+.btn-label-games::before {
    color: #FFF;
}

.btn-label-sports {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-sports::before {
    content: "スポーツ";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-sports {
    display: none;
}

.checkbox-sports:checked+.btn-label-sports {
    background-color: #FF5655;
}

.checkbox-sports:checked+.btn-label-sports::before {
    color: #FFF;
}

.btn-label-kitchen {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-kitchen::before {
    content: "キッチン";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-kitchen {
    display: none;
}

.checkbox-kitchen:checked+.btn-label-kitchen {
    background-color: #FF5655;
}

.checkbox-kitchen:checked+.btn-label-kitchen::before {
    color: #FFF;
}

.btn-label-handmade {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-handmade::before {
    content: "ハンドメイド";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-handmade {
    display: none;
}

.checkbox-handmade:checked+.btn-label-handmade {
    background-color: #FF5655;
}

.checkbox-handmade:checked+.btn-label-handmade::before {
    color: #FFF;
}

.btn-label-accessories {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-accessories::before {
    content: "アクセサリー";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-accessories {
    display: none;
}

.checkbox-accessories:checked+.btn-label-accessories {
    background-color: #FF5655;
}

.checkbox-accessories:checked+.btn-label-accessories::before {
    color: #FFF;
}

.btn-label-toys {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-toys::before {
    content: "おもちゃ";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-toys {
    display: none;
}

.checkbox-toys:checked+.btn-label-toys {
    background-color: #FF5655;
}

.checkbox-toys:checked+.btn-label-toys::before {
    color: #FFF;
}

.btn-label-babiesAndKids {
    display: block;
    width: 75px;
    height: 20px;
    background-color: #FFF;
    text-align: center;
    border-radius: 100vh;
    border: 3px solid #FF5555;
    cursor: pointer;
    margin-left: 10px;
}

.btn-label-babiesAndKids::before {
    content: "ベビー・キッズ";
    font-size: 10px;
    color: #FF5555;
}

.checkbox-babiesAndKids {
    display: none;
}

.checkbox-babiesAndKids:checked+.btn-label-babiesAndKids {
    background-color: #FF5655;
}

.checkbox-babiesAndKids:checked+.btn-label-babiesAndKids::before {
    color: #FFF;
}

</style>
