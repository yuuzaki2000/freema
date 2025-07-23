<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('llaOEBC')) {
    $componentId = $_instance->getRenderedChildComponentId('llaOEBC');
    $componentTag = $_instance->getRenderedChildComponentTagName('llaOEBC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('llaOEBC');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('llaOEBC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH /var/www/vendor/livewire/livewire/src/Testing/../views/mount-component.blade.php ENDPATH**/ ?>