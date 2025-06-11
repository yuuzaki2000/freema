<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/product_register.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('title'); ?>
商品の出品

<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chain', [])->html();
} elseif ($_instance->childHasBeenRendered('jkotpCS')) {
    $componentId = $_instance->getRenderedChildComponentId('jkotpCS');
    $componentTag = $_instance->getRenderedChildComponentTagName('jkotpCS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jkotpCS');
} else {
    $response = \Livewire\Livewire::mount('chain', []);
    $html = $response->html();
    $_instance->logRenderedChild('jkotpCS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/exhibition.blade.php ENDPATH**/ ?>