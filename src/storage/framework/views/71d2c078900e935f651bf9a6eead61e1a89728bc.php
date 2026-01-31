<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/trade_chat_buyer.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('total-container'); ?>
<div class="total-container">
    <div class="side-bar">その他の取引</div>
    <div class="center">
        <div class="center-container">
            <div class="title-container">
                <a href="#modal">モーダルを表示</a>
                <form action="#modal" method="GET">
                    <?php echo csrf_field(); ?>
                    <button type="submit">モーダルを表示</button>
                </form>
            </div>
            <div class="product-info-container"></div>
            <div class="message-container"></div>
        </div>
        <div class="modal" id="modal">
            <a href="#!" class="modal-overlay"></a>
            <div class="modal__inner">
                <div class="modal__content">
                    モーダルの中身
                    <form action="/" method="GET">
                        <?php echo csrf_field(); ?>
                        <button type="submit">トップページへ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.trade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/trade_chat_buyer.blade.php ENDPATH**/ ?>