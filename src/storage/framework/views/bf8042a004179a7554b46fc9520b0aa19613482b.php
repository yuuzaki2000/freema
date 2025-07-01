<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div>
    <div class="tab">
        <form action="/" method="get" class="favorite">
            <input type="hidden" name="page" value="favorite">
            <button type="submit" class="favorite-btn">おすすめ</button>
        </form>
        <form action="/" method="get" class="mylist">
            <input type="hidden" name ="page" value="mylist">
            <input type="hidden" name ="keyword" value="<?php echo e($keyword); ?>">
            <button type="submit" class="mylist-btn">マイリスト</button>
        </form>
    </div>
    <div class="container">
        <ul class="group">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="compartment">
                            <a href="/item/<?php echo e($product->id); ?>" class="item">
                                <img src="<?php echo e(asset($product->image)); ?>" alt="商品画像" width="100%">
                                <div class="product-info">
                                    <p><?php echo e($product->name); ?></p>
                                    <p><?php echo e($product->isSold); ?></p>
                                </div>
                            </a>
                        </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app_keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/search_result.blade.php ENDPATH**/ ?>