<div>
    
    <div>
        <div>
            <h4>商品画像</h4>
        </div>
        <div class="">
            <div>
                <button class="select-btn" type="submit">画像を選択する</button>
            </div>
        </div>
    </div>
    <div>
        <div>
            <h3 class="h3">商品の詳細</h3>
        </div>
        <div class="">
            <div>
                <h4>カテゴリー</h4>
            </div>
            <div>
                <input type="checkbox" name="category" value="1">ファッション
                <input type="checkbox" name="category" value="2">家電
                <input type="checkbox" name="category" value="3" checked="checked">インテリア
                <input type="checkbox" name="category" value="4">レディース
                <input type="checkbox" name="category" value="5">メンズ
                <input type="checkbox" name="category" value="6">コスメ
                <input type="checkbox" name="category" value="7">本
                <input type="checkbox" name="category" value="8">ゲーム
                <input type="checkbox" name="category" value="9">スポーツ
                <input type="checkbox" name="category" value="10">キッチン
                <input type="checkbox" name="category" value="11">ハンドメイド
                <input type="checkbox" name="category" value="12">アクセサリー
                <input type="checkbox" name="category" value="13">おもちゃ
                <input type="checkbox" name="category" value="14">ベビー・キッズ
            </div>
        </div>
        <div class="condition-part">
            <div>
                <h4>商品の状態</h4>
            </div>
            <div>
                <select name="condition">
                    <option value="1">良好</option>
                    <option value="2">目立った傷や汚れなし</option>
                    <option value="3">やや傷や汚れあり</option>
                    <option value="4">状態が悪い</option>
                </select>
            </div>
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
        </div>
        <div class="brand-part">
            <div>
                <h4>ブランド名</h4>
            </div>
            <div>
                <input type="text" name="brand">
            </div>
        </div>
        <div class="description-part">
            <div>
                <h4>商品の説明</h4>
            </div>
            <div>
                <input type="text" name="description">
            </div>
        </div>
        <div class="price-part">
            <div>
                <h4>販売価格</h4>
            </div>
            <div>
                <input type="text" name="price">
            </div>
        </div>
        <div>
            <button class="btn" wire:click="store()">出品する</button>
        </div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/livewire/listing.blade.php ENDPATH**/ ?>