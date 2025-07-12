<div>
    <form action="/mypage/profile" method="post" class="inner" enctype="multipart/form-data">
    @csrf
    @if (empty($profile) == true)
        <div class="content">
            <div>
                <h4>画像</h4>
            </div>
            <div>
                <input type="file" class="file-button" name="file" wire:change = "onChange($event.target.value)">
                <img class="profile-image" src="{{asset($imageUrl)}}" alt="商品画像" width="200px">
                <input type="hidden" name="image" value="{{$imageUrl}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name" value="{{$user->name}}">
                <input type="hidden" name="user_id" value="{{$user->id}}">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{old('post_code')}}>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{old('address')}}>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{old('building')}}>
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    @else
        @method('PATCH')
        <div class="content">
            <div>
                <h4>画像</h4>
            </div>
            <div>
                <input type="file" class="file-button" name="file" wire:change = "onChange($event.target.value)">
                <img class="profile-image" src="{{asset($imageUrl)}}" alt="商品画像" width="200px">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="{{$user->id}}">
                <input class="input" type="text" name="" value="{{$user->name}}">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{$profile->post_code}}>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{$profile->address}}>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{$profile->building}}>
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    @endif
    </form>
</div>
