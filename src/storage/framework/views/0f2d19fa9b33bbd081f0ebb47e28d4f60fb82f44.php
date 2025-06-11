<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/address_change.css')); ?>">

<?php $__env->startSection('title'); ?>
住所の変更

<?php $__env->startSection('content'); ?>
    <form class="inner" action="/purchase/address/<?php echo e($product->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="content">
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
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/address_change.blade.php ENDPATH**/ ?>