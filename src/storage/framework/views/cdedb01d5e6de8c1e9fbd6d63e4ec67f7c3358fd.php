<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">

<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h2>商品の出品</h2>
    </div>
    <div>
        <img src="<?php echo e(asset($imageFilePath)); ?>" alt="サンプル画像" width="200px">
    </div>
    <form action="/upload/product" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file">
        <button type="submit">アップロード</button>
    </form>
    <form action="/sell" method="post">
    <?php echo csrf_field(); ?>
        <div>
            <h3 class="h3">商品の詳細</h3>
        </div>
        <div>
            <input type="hidden" name="image" value="<?php echo e(asset('storage/product_img/uranai_tarot_card.png')); ?>">
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
        <div class="">
            <div>
                <h4>カテゴリー</h4>
            </div>
            <div class="checkbox-group"> 
                <div>
                    <input type="checkbox" name="category[]" value="1" id="fashion" class="checkbox-fashion">
                    <label for="fashion" class="btn-label-fashion"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="2" id="home-appliance" class="checkbox-home-appliance">
                    <label for="home-appliance" class="btn-label-home-appliance"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="3" id="interior" class="checkbox-interior">
                    <label for="interior" class="btn-label-interior"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="4" id="ladies" class="checkbox-ladies">
                    <label for="ladies" class="btn-label-ladies"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="5" id="mens" class="checkbox-mens">
                    <label for="mens" class="btn-label-mens"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="6" id="cosmetics" class="checkbox-cosmetics">
                    <label for="cosmetics" class="btn-label-cosmetics"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="7" id="books" class="checkbox-books">
                    <label for="books" class="btn-label-books"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="8" id="games" class="checkbox-games">
                    <label for="games" class="btn-label-games"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="9" id="sports" class="checkbox-sports">
                    <label for="sports" class="btn-label-sports"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="10" id="kitchen" class="checkbox-kitchen">
                    <label for="kitchen" class="btn-label-kitchen"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="11" id="handmade" class="checkbox-handmade">
                    <label for="handmade" class="btn-label-handmade"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="12" id="accessories" class="checkbox-accessories">
                    <label for="accessories" class="btn-label-accessories"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="13" id="toys" class="checkbox-toys">
                    <label for="toys" class="btn-label-toys"></label>
                </div>
                <div>
                    <input type="checkbox" name="category[]" value="14" id="babiesAndKids" class="checkbox-babiesAndKids">
                    <label for="babiesAndKids" class="btn-label-babiesAndKids"></label>
                </div>
            </div>
            <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div>
                <p><?php echo e($errors->first('category')); ?></p>
            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
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
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>