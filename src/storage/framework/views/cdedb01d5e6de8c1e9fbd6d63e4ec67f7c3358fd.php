<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>


<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('listing-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('B2eobM6')) {
    $componentId = $_instance->getRenderedChildComponentId('B2eobM6');
    $componentTag = $_instance->getRenderedChildComponentTagName('B2eobM6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('B2eobM6');
} else {
    $response = \Livewire\Livewire::mount('listing-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('B2eobM6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>