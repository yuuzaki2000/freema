<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/trade_chat.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('total-container'); ?>
<div class="total-container">
    <div class="side-bar"><p class="side-bar-title">その他の取引</p></div>
    <div class="center">
        <div class="center-container">
            <div class="title-bar-container">
                <div>
                    <div>
                        <img src="<?php echo e(asset($product->trade->buyer->profile->image)); ?>" alt="ユーザー画像">
                    </div>
                    <h2>「<?php echo e($product->trade->buyer->name); ?>」さんとの取引画面</h2>
                </div>
            </div>
            <div class="product-info-container">
                <div style="height:130px;width:130px;">
                    <img src="<?php echo e(asset($product->image)); ?>" alt="商品画像" style="width:100%;">
                </div>
                <div class="product-info">
                    <div class="product-name"><?php echo e($product->name); ?></div>
                    <div class="product-price"><?php echo e($product->price); ?>円</div>
                </div>
            </div>
            <div class="message-container">
                <div></div>
                <form action="/products/<?php echo e($product->id); ?>/trades/messages" method="POST">
                <?php echo csrf_field(); ?>
                    <input type="text" name="content">
                    <label class="file-label">
                        画像を追加
                        <input type="file" name="file" class="file-input">
                    </label>
                    <input type="hidden" name="page" value="seller">
                    <button type="submit">メール送信<i class="fa-regular fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="modal" id="modal">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal__inner">
                <div class="modal__content">
                    <form action="/star" method="POST">
                        <?php echo csrf_field(); ?>
                        <select name="star_point">
                            <option value="">星の数を選択</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit">送信</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.trade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/trade_chat_seller.blade.php ENDPATH**/ ?>