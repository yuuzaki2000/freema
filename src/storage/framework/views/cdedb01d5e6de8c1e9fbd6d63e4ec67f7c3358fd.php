<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h2>商品の出品</h2>
    </div>
    <div>
        <img src="<?php echo e(asset($imageFilePath)); ?>" alt="サンプル画像" width="200px">
    </div>
    <form action="/sell" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <h3 class="h3">商品の詳細</h3>
        </div>
        <div>
            <input type="hidden" name="image" value="storage/product_img/uranai_tarot_card.png">
        </div>
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            <p><?php echo e($errors->first('image')); ?></p>
        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
        <div class="condition-part">
            <div>
                <h4>商品の状態</h4>
            </div>
            <div>
                <select name="condition">
                    <option value="良好">良好</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="状態が悪い">状態が悪い</option>
                </select>
            </div>
            <?php $__errorArgs = ['condition'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('condition')); ?></p>
            </div>   
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <h3 class="h3">商品名と説明</h3>
        </div>
        <div class="name-part">
            <div>
                <h4>商品名</h4>
            </div>
            <div>
                <input type="text" name="name">
            </div>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('name')); ?></p>
            </div>   
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="brand-part">
            <div>
                <h4>ブランド名</h4>
            </div>
            <div>
                <input type="text" name="brand">
            </div>
            <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('brand')); ?></p>
            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="description-part">
            <div>
                <h4>商品の説明</h4>
            </div>
            <div>
                <input type="text" name="description">
            </div>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('description')); ?></p>
            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="price-part">
            <div>
                <h4>販売価格</h4>
            </div>
            <div>
                <input type="text" name="price">
            </div>
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('price')); ?></p>
            </div>
                
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <button class="btn" type="submit">出品する</button>
        </div>
    </form>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chain', [])->html();
} elseif ($_instance->childHasBeenRendered('7yyO3yg')) {
    $componentId = $_instance->getRenderedChildComponentId('7yyO3yg');
    $componentTag = $_instance->getRenderedChildComponentTagName('7yyO3yg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7yyO3yg');
} else {
    $response = \Livewire\Livewire::mount('chain', []);
    $html = $response->html();
    $_instance->logRenderedChild('7yyO3yg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>