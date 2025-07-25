<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/profile_update.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile-cover', ['userId' => ''.e($userId).'','profileId' => ''.e($profileId).''])->html();
} elseif ($_instance->childHasBeenRendered('jLnENzT')) {
    $componentId = $_instance->getRenderedChildComponentId('jLnENzT');
    $componentTag = $_instance->getRenderedChildComponentTagName('jLnENzT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jLnENzT');
} else {
    $response = \Livewire\Livewire::mount('profile-cover', ['userId' => ''.e($userId).'','profileId' => ''.e($profileId).'']);
    $html = $response->html();
    $_instance->logRenderedChild('jLnENzT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/profile_update.blade.php ENDPATH**/ ?>