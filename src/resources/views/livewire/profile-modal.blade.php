<div>
    <form action="/mypage/profile" method="post" class="inner" enctype="multipart/form-data">
    @csrf
    @if (empty($profile))
        <div class="content">
                    <div>
                        <img class="profile-image" src="" alt="プロフィール画像" width="200px">
                        <input type="file" class="file-button" name="file" wire:change = "onChange($event.target.value)">
                    </div>
                </div>
                <div>
                    <input type="hidden" name="image" value="">
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
            <div class="upper-container">
                <div>
                    <img class="profile-image" src="{{asset($profile->image)}}" alt="プロフィール画像" width="200px">
                </div>
                <input type="file" class="file-button" name="file" wire:change="onChange($event.target.value)">
                <input type="hidden" name="image" value="{{$profile->image}}">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name" value="{{$user->name}}">
                <input type="hidden" name="user_id" value="{{$user->id}}">
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
            <div>
                <button type="submit" class="btn">更新する</button>
            </div>
        </div>
    @endif
    </form>
</div>
<style>
.error-message {
    color: #FF5555;
}

.upper-container {
    display: flex;
}

.profile-image {
}

.file-button {
    padding:100px 0px;
    height: 50px;
    width: 200px;
}

.file-button::file-selector-button {
    top: 50%;
    width:195px;
    color: #ff5555;
    background-color: #FFF;
    border: 1px solid #ff5555;
    border-radius: 10px;
    text-align: center;
}
</style>
