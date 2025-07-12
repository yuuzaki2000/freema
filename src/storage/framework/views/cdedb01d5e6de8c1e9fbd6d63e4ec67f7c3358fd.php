<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chain', [])->html();
} elseif ($_instance->childHasBeenRendered('FhD13kX')) {
    $componentId = $_instance->getRenderedChildComponentId('FhD13kX');
    $componentTag = $_instance->getRenderedChildComponentTagName('FhD13kX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FhD13kX');
} else {
    $response = \Livewire\Livewire::mount('chain', []);
    $html = $response->html();
    $_instance->logRenderedChild('FhD13kX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>