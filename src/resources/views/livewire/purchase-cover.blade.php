<div  class="container">
    <div class="left-side">
        <div class="upper">
            <div class="upper-left">
                <img src="{{asset($productImage)}}" alt="" width="60%">
            </div>
            <div class="upper-right">
                <p>{{$productName}}</p>
                <p>&yen{{$productPrice}}</p>
            </div>
        </div>
        <div class="middle">
            <div>
                <p>支払い方法</p>
            </div>
            <select wire:model="paymentMethod" name="payment_method" class="select">
                <option value="">選択してください</option>
                <option value="コンビニ支払">コンビニ支払</option>
                <option value="カード支払い">カード支払い</option>
            </select>
            @error('payment_method')
                <div class="error-message">{{$errors->first('payment_method')}}</div>
            @enderror
        </div>
        <div class="bottom">
            <div class="shipping">
                <p>配送先:</p>
                <button wire:click="getAddressChange({{$product->id}})">変更する</button>
            </div>
            <div>
                @isset($post_code)
                    <input type="text" value="{{$post_code}}">
                @endisset
                @isset($address)
                    <input type="text" value="{{$address}}">                    
                @endisset
                @isset($building)
                    <input type="text" value="{{$building}}">                    
                @endisset
            </div>
        </div>
    </div>
    <div class="right-side">
        <table border="1" class="table">
            <tr>
                <td>商品代金</td>
                <th>&yen{{$productPrice}}</th>
            </tr>
            <tr class="payment">
                <td>支払方法</td>
                <th>{{$paymentMethod}}</th>
            </tr>
        </table>
        <form  action="/checkout" method="post">
        @csrf
            <div>
                <input type="hidden" name="product_id" value="{{$product->id}}">
            </div>
            <div>
                @isset($post_code)
                    <input type="hidden" name="post_code" value="{{$post_code}}">
                @endisset
                @isset($address)
                    <input type="hidden" name="address" value="{{$address}}">                    
                @endisset
                @isset($building)
                    <input type="hidden" name="building" value="{{$building}}">                    
                @endisset
            </div>
            <div>
                <input type="hidden" name="payment_method" value="{{$paymentMethod}}">
            </div>
            <div>
                <button type="submit" class="btn">購入する</button>
            </div>
        </form>
    </div>
</div>
<style>
    .error-message {
        color: #FF5555;
    }
    
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

    .select {
        border:1px solid #000;
    }

    .shipping {
        display: flex;
        justify-content:space-between;
    }

    .table {
        border:1px solid #000;
        width:400px;
        border-collapse: collapse;
    }

    .payment {
        border-top:1px solid #000;
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
