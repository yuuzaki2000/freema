<div>
    <form action="/mypage/profile" method="post" class="inner" enctype="multipart/form-data">
    @csrf
    @if (empty($profile))
        <div class="content">
            <h2 class="inner-header">プロフィール設定</h2>
            <div class="upper-container">
                <div>
                    <img class="profile-image" src="{{asset($photo_path)}}" alt="プロフィール画像" width="200px" height="200px">
                    <input type="file" class="file-button" name="file" wire:model="photo">
                    <input type="hidden" name="image" value="{{$photo_path}}">
                </div>
            </div>
            <div>
                
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
            <h2 class="inner-header">プロフィール編集</h2>
            <div class="upper-container">
                <div>
                    <img class="profile-image" src="{{asset($photo_path)}}" alt="プロフィール画像" width="200px" height="200px">
                </div>
                <input type="file" class="file-button" name="file" wire:model="photo">
                <input type="hidden" name="image" value="{{$photo_path}}">
                @error('image')
                    <div><p class="error-message">{{$errors->first('image')}}</p></div>
                @enderror
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name" value="{{$user->name}}">
                <input type="hidden" name="user_id" value="{{$user->id}}">
                @error('user_id')
                    <div><p class="error-message">{{$errors->first('user_id')}}</p></div>                    
                @enderror
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value={{$profile->post_code}}>
                @error('post_code')
                    <div><p class="error-message">{{$errors->first('post_code')}}</p></div>                    
                @enderror
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value={{$profile->address}}>
                @error('address')
                    <div><p class="error-message">{{$errors->first('address')}}</p></div>                    
                @enderror
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value={{$profile->building}}>
                @error('building')
                    <div><p class="error-message">{{$errors->first('building')}}</p></div>                    
                @enderror
            </div>
            <div>
                <button type="submit" class="btn">更新する</button>
            </div>
        </div>
    @endif
    </form>
</div>
<style>
.inner-header {
    text-align: center;
}
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

