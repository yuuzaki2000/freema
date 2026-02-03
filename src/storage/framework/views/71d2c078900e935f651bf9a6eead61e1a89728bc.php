<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/trade_chat_buyer.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('total-container'); ?>
<div class="total-container">
    <div class="side-bar">その他の取引</div>
    <div class="center">
        <div class="center-container">
            <div class="title-bar-container">
                <div>
                    <img src="" alt="">
                </div>
                <h2>「」さんとの取引画面</h2>
                <form action="/products/<?php echo e($item_id); ?>/trade" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit">取引を完了する</button>
                </form>
            </div>
            <div class="product-info-container"></div>
            <div class="message-container">
                <div></div>
                <form action="/products/<?php echo e($item_id); ?>/trades/messages" method="POST">
                <?php echo csrf_field(); ?>
                    <input type="text" name="content">
                    <input type="file" name="image">
                    <button type="submit">メール送信</button>
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


<?php echo $__env->make('layouts.trade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/trade_chat_buyer.blade.php ENDPATH**/ ?>