<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app_wide.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('purchase-modal', ['productId' => ''.e($product->id).''])->html();
} elseif ($_instance->childHasBeenRendered('U8c34NC')) {
    $componentId = $_instance->getRenderedChildComponentId('U8c34NC');
    $componentTag = $_instance->getRenderedChildComponentTagName('U8c34NC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('U8c34NC');
} else {
    $response = \Livewire\Livewire::mount('purchase-modal', ['productId' => ''.e($product->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('U8c34NC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/purchase.blade.php ENDPATH**/ ?>