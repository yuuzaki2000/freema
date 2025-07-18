<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/member_register.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
会員登録
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="inner" action="/register" method="post">
    <?php echo csrf_field(); ?>
        <div class="content">
            <div>
                <p>ユーザー名</p>
                <input class="input" type="text" name="name">
            </div>
            <div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($errors->first('name')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <p>メールアドレス</p>
                <input class="input" type="text" name="email">
            </div>
            <div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($errors->first('email')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <p>パスワード</p>
                <input class="input" type="password" name="password">
            </div>
            <div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p><?php echo e($errors->first('password')); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <p>確認用パスワード</p>
                <input class="input" type="password" name="password_confirmation">
            </div>
            <button type="submit" class="btn">登録する</button>
            <div class="login-text-container"><a href="/login" class="login-text">ログインはこちら</a></div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/register.blade.php ENDPATH**/ ?>