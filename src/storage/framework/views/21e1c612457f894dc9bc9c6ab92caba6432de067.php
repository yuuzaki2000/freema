<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app_wide.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('bind', ['productId' => ''.e($product->id).''])->html();
} elseif ($_instance->childHasBeenRendered('R2oT6Lh')) {
    $componentId = $_instance->getRenderedChildComponentId('R2oT6Lh');
    $componentTag = $_instance->getRenderedChildComponentTagName('R2oT6Lh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('R2oT6Lh');
} else {
    $response = \Livewire\Livewire::mount('bind', ['productId' => ''.e($product->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('R2oT6Lh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/purchase.blade.php ENDPATH**/ ?>