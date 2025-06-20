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
            <div><p class="subtitle">&yen<?php echo e($product->price); ?></p></div>
            <div class="btn-group">
                <form action="/favorite/<?php echo e($product->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div>
                        <button type="submit">
                            <img src="<?php echo e(asset('img/star_icon.png')); ?>" alt="いいね" width="30px" height="30px">
                        </button>
                        <p style="text-align: center;">3</p>
                    </div>
                </form>
                <form action="" method="post">
                <?php echo csrf_field(); ?>
                    <div>
                        <button type="submit">
                            <img src="<?php echo e(asset('img/comment_icon.png')); ?>" alt="いいね" width="30px" height="30px">
                        </button>
                        <p style="text-align: center;">1</p>
                    </div>
                </form>
            </div>
            <form action="/purchase/<?php echo e($product->id); ?>" method="get">
                <button type="submit" class="btn">購入手続きへ</button>
            </form>
        </div>
        <div>
            <div class="subtitle"><p>商品説明</p></div>
            <div><p>カラー：</p></div>
            <div><p>新品</p></div>
            <div><p>商品の状態は良好です。傷もありません。</p></div>
            <div><p>購入後、即発送いたします。</p></div>
        </div>
        <div>
            <div class="subtitle">商品の情報</div>
            <div>
                <div class="item-label">カテゴリー</div>
                <div class="item-content">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="checkbox" id="category" value="<?php echo e($category->id); ?>" <?php echo e(in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'checked' : ''); ?> name="category_product[]">
                    <label for="category"><?php echo e($category->content); ?></label>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div>
                <div class="item-label">商品の状態</div>
                <div class="item-content"></div>
            </div>
        </div>
        <div>
            <div class="subtitle">コメント（１）</div>
            <div style="display: flex; flex-direction: row;">
                <div>
                    <img src="" alt="プロフィール画像">
                </div>
                <div>admin</div>
            </div>
            <div style="background-color: #E6E6E6">こちらにコメントが入ります</div>
        </div>
        <form action="/comment/<?php echo e($product->id); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div>
                <p>商品へのコメント</p>
            </div>
            <textarea name="content" cols="80" rows="8" style="border:1px solid #000"></textarea>
            <button type="submit" class="btn">コメントを送信する</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/product_detail.blade.php ENDPATH**/ ?>