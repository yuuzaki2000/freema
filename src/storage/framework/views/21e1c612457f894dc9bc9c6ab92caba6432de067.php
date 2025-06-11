<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app_wide.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('bind', ['productId' => ''.e($product->id).''])->html();
} elseif ($_instance->childHasBeenRendered('3pfa4Uk')) {
    $componentId = $_instance->getRenderedChildComponentId('3pfa4Uk');
    $componentTag = $_instance->getRenderedChildComponentTagName('3pfa4Uk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3pfa4Uk');
} else {
    $response = \Livewire\Livewire::mount('bind', ['productId' => ''.e($product->id).'']);
    $html = $response->html();
    $_instance->logRenderedChild('3pfa4Uk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/purchase.blade.php ENDPATH**/ ?>