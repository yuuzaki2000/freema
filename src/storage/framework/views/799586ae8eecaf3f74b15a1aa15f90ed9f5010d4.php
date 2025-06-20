<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/profile_update.css')); ?>">

<?php $__env->startSection('content'); ?>
    <form action="/upload/profile" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
        <?php if(isset($profile)): ?>
        <div>
            <img src="<?php echo e(asset($profile->image)); ?>" alt="サンプル画像" width="100px" height="100px">
        </div>
        <?php endif; ?>
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form class="inner" action="/mypage/profile" method="post">
    <?php echo csrf_field(); ?>
    <?php if(empty($profile) == true): ?>
        <div class="content">
            <div>
                <input type="hidden" name="image" value="<?php echo e($imageFilePath); ?>">
            </div>
            <div>
                <p>ユーザー名</p>
                <input class="input" type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <input class="input" type="text" name="user_name" value="<?php echo e($user->name); ?>">
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
                <input type="hidden" name="image" value="<?php echo e($imageFilePath); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/profile_update.blade.php ENDPATH**/ ?>