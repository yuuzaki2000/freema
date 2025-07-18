<form class="container" action="/checkout" method="post">
    @csrf
    <div class="left-side">
        <div class="upper">
            <div class="upper-left">
                <img src="{{asset($productImage)}}" alt="" width="60%">
            </div>
            <div class="upper-right">
                <p>{{$productName}}</p>
                <p>{{$productPrice}}</p>
            </div>
            <div>
                <input type="hidden" name="product_id" value="{{$product->id}}">
            </div>
        </div>
        <div class="middle">
            <div>
                <p>支払い方法</p>
            </div>
            <select wire:model="paymentMethod" name="payment_method" style="border:1px solid #000;">
                <option value="">選択してください</option>
                <option value="コンビニ支払">コンビニ支払</option>
                <option value="カード支払い">カード支払い</option>
            </select>
            @error('payment_method')
                <div style="color:red;">{{$errors->first('payment_method')}}</div>
            @enderror
        </div>
        <div class="bottom">
            <div style="display: flex; justify-content:space-between;">
                <p>配送先:</p>
                <button wire:click="getAddressChangeView({{$product->id}})">変更する</button>
            </div>
            <div>
                @isset($profilePostCode)
                    <input type="text" name="post_code" value="{{$profilePostCode}}">
                @endisset
                @isset($profileAddress)
                    <input type="text" name="address" value="{{$profileAddress}}">                    
                @endisset
                @isset($profileBuilding)
                    <input type="text" name="building" value="{{$profileBuilding}}">                    
                @endisset
            </div>
        </div>
    </div>
    <div class="right-side">
        <table border="1" style="border:1px solid #000;width:400px;border-collapse: collapse;">
            <tr>
                <td>商品代金</td>
                <th>{{$productPrice}}</th>
            </tr>
            <tr style="border-top:1px solid #000;">
                <td>支払方法</td>
                <th>{{$paymentMethod}}</th>
            </tr>
        </table>
        <button type="submit" class="btn">購入する</button>
    </div>
</form>
<style>
    .upper {
        width:100%;
        display: flex;
        padding-bottom: 40px;
        border-bottom: 1px solid #000;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .left-side {
        width:60%;
    }

    .right-side {
        width:30%;
    }

    .upper {

    }

    .upper-left {
        width:25%;
    }

    .upper-right {
        width:75%;
    }

    .middle {
        height:200px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding-bottom: 40px;
        border-bottom: 1px solid #000;
        margin-bottom: 30px;
    }

    .btn {
        width: 400px;
        height: 40px;
        background-color: #FF5555;
        color: #fff;
        margin-top: 60px;
    }

    th, td{
        padding:10px 30px;
    }
</style>
