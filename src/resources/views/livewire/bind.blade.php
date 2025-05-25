<div>
    {{-- The whole world belongs to you. --}}
    <div>
        <p>Livewire画面</p>
    </div>
    <div>
        <p>支払方法</p>
    </div>
    <div>
        <select wire:model="paymentMethod" name="">
            <option value=""></option>
            <option value="コンビニ支払">コンビニ支払</option>
            <option value="カード支払い">カード支払い</option>
        </select>
    </div>
    <table>
        <tr>
            <td>商品代金</td>
            <th>{{$productPrice}}</th>
        </tr>
        <tr>
            <td>支払方法</td>
            <th>{{$paymentMethod}}</th>
        </tr>
    </table>
    <button wire:click="store({{$product->id}})">購入する</button>
</div>
