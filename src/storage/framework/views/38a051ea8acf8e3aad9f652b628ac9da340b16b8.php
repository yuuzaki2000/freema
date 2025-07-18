<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/email_vertification.css')); ?>">
    
<?php $__env->startSection('content'); ?>
<div class="content">
    <div>
        <div>
            <p>登録していただいたメールアドレスに認証メールを送付しました。</p>
        </div>
        <div>
            <p>メール認証を完了してください。</p>
        </div>
    </div>
    <div>
        <a href="https://mailtrap.io/inboxes/3854519/messages" class="verification">認証はこちらから</a>
        <form action="<?php echo e(route('verification.send')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="resend">認証メールを再送する</button>
        </form>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/email_vertification.blade.php ENDPATH**/ ?>