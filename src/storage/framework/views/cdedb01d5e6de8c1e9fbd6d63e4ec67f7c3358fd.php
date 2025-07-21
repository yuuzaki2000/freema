<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/listing.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('listing-cover', [])->html();
} elseif ($_instance->childHasBeenRendered('LYp8a9V')) {
    $componentId = $_instance->getRenderedChildComponentId('LYp8a9V');
    $componentTag = $_instance->getRenderedChildComponentTagName('LYp8a9V');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LYp8a9V');
} else {
    $response = \Livewire\Livewire::mount('listing-cover', []);
    $html = $response->html();
    $_instance->logRenderedChild('LYp8a9V', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app_slim', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/listing.blade.php ENDPATH**/ ?>