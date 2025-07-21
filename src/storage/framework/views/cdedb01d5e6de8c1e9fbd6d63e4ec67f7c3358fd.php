<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('listing-cover', [])->html();
} elseif ($_instance->childHasBeenRendered('Rt41DDg')) {
    $componentId = $_instance->getRenderedChildComponentId('Rt41DDg');
    $componentTag = $_instance->getRenderedChildComponentTagName('Rt41DDg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Rt41DDg');
} else {
    $response = \Livewire\Livewire::mount('listing-cover', []);
    $html = $response->html();
    $_instance->logRenderedChild('Rt41DDg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>