<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="mt-10 container mx-auto px-8 md:w-2/4">
        <div class="border-t divide-gray-400">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('publish', [])->html();
} elseif ($_instance->childHasBeenRendered('Wxcc2si')) {
    $componentId = $_instance->getRenderedChildComponentId('Wxcc2si');
    $componentTag = $_instance->getRenderedChildComponentTagName('Wxcc2si');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Wxcc2si');
} else {
    $response = \Livewire\Livewire::mount('publish', []);
    $html = $response->html();
    $_instance->logRenderedChild('Wxcc2si', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>



<?php /**PATH /data/webroot/www/evenote/resources/views/publish/show.blade.php ENDPATH**/ ?>