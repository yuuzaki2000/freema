<div class="container">
    <div class="left-side">
        <div class="upper">
            <div class="upper-left">
                <img src="{{asset($product->image)}}" alt="" width="60%">
            </div>
            <div class="upper-right">
                <p>{{$productName}}</p>
                <p>{{$productPrice}}</p>
            </div>
        </div>
        <div class="middle">
            <div>
                <p>支払い方法</p>
            </div>
            <select wire:model="paymentMethod" name="" style="border:1px solid #000;">
                <option value="">選択してください</option>
                <option value="コンビニ支払">コンビニ支払</option>
                <option value="カード支払い">カード支払い</option>
            </select>
        </div>
        <div class="bottom">
            <div>
                <p>配送先</p>
            </div>
            <div>
                <button wire:click="getAddressChangeView({{$product->id}})">変更する</button>
            </div>
            <div>
                <p>{{$text}}</p>
            </div>
        </div>
    </div>
    <div class="right-side">
        <table>
            <tr>
                <td>商品代金</td>
                <th>{{$productPrice}}</th>
            </tr>
            <tr style="border-top:1px solid #000;">
                <td>支払方法</td>
                <th>{{$paymentMethod}}</th>
            </tr>
        </table>
        <button class="btn" wire:click="store({{$product->id}})">購入する</button>
    </div>
</div>
<style>
    .upper {
        width:100%;
        display: flex;
        padding-bottom: 40px;
        border-bottom: 1px solid #000;
    }

    .upper-left {
        width:25%;
    }

    .upper-right {
        width:75%;
    }

    .container {
        display: flex;
    }

    .left-side {
        width:70%;
    }

    .right-side {
        width:30%;
    }

    .btn {
        width: 600px;
        height: 40px;
        background-color: #FF5555;
        color: #fff;
    }
</style>
