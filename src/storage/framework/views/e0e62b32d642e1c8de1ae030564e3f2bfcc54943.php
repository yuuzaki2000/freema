<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/product_detail.css')); ?>">

<?php $__env->startSection('content'); ?>
<div class="total-container">
    <div class="left-container">
        <div><img src="<?php echo e(asset('img/coffee_cup.jpg')); ?>" alt="" width="400px"></div>
    </div>
    <div class="right-container">
        <div>
            <div class="title-name"><p><?php echo e($product->name); ?></p></div>
            <div class="title-price"><p><?php echo e($product->brand); ?></p></div>
            <div><p><?php echo e($product->price); ?></p></div>
            <div class="btn-group">
                <div><img src="" alt="いいね" width="10px" height="10px"></div>
                <form action="/favorite/<?php echo e($product->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div>
                        <button type="submit">いいね</button>
                    </div>
                </form>
                <div><img src="" alt="コメント" width="10px" height="10px"></div>
            </div>
            <form action="/purchase/<?php echo e($product->id); ?>" method="get">
                <button type="submit" class="btn">購入手続きへ</button>
            </form>
        </div>
        <div>
            <div class="subtitle">商品説明</div>
        </div>
        <div>
            <div class="subtitle">商品の情報</div>
            <div>
                <div class="item-label">カテゴリー</div>
                <div class="item-content"></div>
            </div>
            <div>
                <div class="item-label">商品の状態</div>
                <div class="item-content"></div>
            </div>
        </div>
        <div>
            <div class="subtitle">コメント（１）</div>
        </div>
        <form action="/comment/<?php echo e($product->id); ?>" method="post">
        <?php echo csrf_field(); ?>
            <textarea name="content" cols="30" rows="10"></textarea>
            <button type="submit">コメントを送信する</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product_detail.blade.php ENDPATH**/ ?>