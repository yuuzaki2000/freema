<div>
    <form action="/mypage/profile" method="post" class="inner" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if(empty($profile) == true): ?>
        <div class="content">
            <div>
                <h4>画像</h4>
            </div>
            <div>
                <input type="file" class="file-button" name="file" wire:change = "onChange($event.target.value)">
                <img class="profile-image" src="<?php echo e(asset($imageUrl)); ?>" alt="商品画像" width="200px">
                <input type="hidden" name="image" value="<?php echo e($imageUrl); ?>">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name" value="<?php echo e($user->name); ?>">
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value=<?php echo e(old('post_code')); ?>>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value=<?php echo e(old('address')); ?>>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value=<?php echo e(old('building')); ?>>
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    <?php else: ?>
        <?php echo method_field('PATCH'); ?>
        <div class="content">
            <div>
                <h4>画像</h4>
            </div>
            <div>
                <input type="file" class="file-button" name="file" wire:change = "onChange($event.target.value)">
                <img class="profile-image" src="<?php echo e(asset($imageUrl)); ?>" alt="商品画像" width="200px">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <input class="input" type="text" name="" value="<?php echo e($user->name); ?>">
            </div>
            <div>
                <p>郵便番号</p>
                <input class="input" type="text" name="post_code" value=<?php echo e($profile->post_code); ?>>
            </div>
            <div>
                <p>住所</p>
                <input class="input" type="text" name="address" value=<?php echo e($profile->address); ?>>
            </div>
            <div>
                <p>建物名</p>
                <input class="input" type="text" name="building" value=<?php echo e($profile->building); ?>>
            </div>
            <button type="submit" class="btn">更新する</button>
        </div>
    <?php endif; ?>
    </form>
</div>
<?php /**PATH /var/www/resources/views/livewire/connect.blade.php ENDPATH**/ ?>