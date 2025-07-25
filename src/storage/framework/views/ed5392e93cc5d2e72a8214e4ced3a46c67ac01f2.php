<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/mypage.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div class="upper">
        <?php if(isset($profile)): ?>
        <div>
            <img src="<?php echo e(asset($profile->image)); ?>" alt="プロフィール画像">
        </div>
        <?php endif; ?>
        <h2><?php echo e($user->name); ?></h2>
        <a href="/mypage/profile" class="skt-btn">プロフィールを編集</a>
    </div>
    <div class="bottom">
        <form action="/mypage" method="get" class="exhibition">
            <input type="hidden" name="page" value="sell">
            <button type="submit" class="exhibition-btn">出品した商品</button>
        </form>
        <form action="/mypage" method="get" class="purchase">
            <input type="hidden" name="page" value="buy">
            <button type="submit" class="purchase-btn">購入した商品</button>
        </form>
    </div>
    <div class="container">
        <ul class="group">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="compartment">
                        <div class="img-wrapper">
                            <img src="<?php echo e(asset($product->image)); ?>" alt="商品画像" width="100%">
                            <p><?php echo e($product->name); ?></p>
                        </div>
                    </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<div><p><?php echo e($page); ?></p></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/mypage.blade.php ENDPATH**/ ?>