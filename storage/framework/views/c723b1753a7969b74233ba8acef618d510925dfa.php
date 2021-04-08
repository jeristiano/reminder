<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="container mx-auto px-8 md:w-2/4">
        <div class="border-t divide-gray-400">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('publish', ['elementId' => 'nested_markdown_editor1'])->html();
} elseif ($_instance->childHasBeenRendered('OzQ9olf')) {
    $componentId = $_instance->getRenderedChildComponentId('OzQ9olf');
    $componentTag = $_instance->getRenderedChildComponentTagName('OzQ9olf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OzQ9olf');
} else {
    $response = \Livewire\Livewire::mount('publish', ['elementId' => 'nested_markdown_editor1']);
    $html = $response->html();
    $_instance->logRenderedChild('OzQ9olf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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