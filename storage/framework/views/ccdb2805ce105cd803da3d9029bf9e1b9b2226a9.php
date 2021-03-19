<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="mt-10 container mx-auto px-8 md:w-2/4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6" >
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    内容
                         <svg class="h-5 w-5 fill-current text-green-600 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <?php echo e($tag->name??"全部"); ?>


                </h3>
                <p class="mt-4 max-w-2xl text-sm text-gray-500">
                    当前主题共有笔记: <?php echo e($total); ?> 条！
                </p>
            </div>
            <div class="border-t border-gray-200">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('content', ['tag' => $tag])->html();
} elseif ($_instance->childHasBeenRendered($tag->id)) {
    $componentId = $_instance->getRenderedChildComponentId($tag->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($tag->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($tag->id);
} else {
    $response = \Livewire\Livewire::mount('content', ['tag' => $tag]);
    $html = $response->html();
    $_instance->logRenderedChild($tag->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /data/webroot/www/evenote/resources/views/content/index.blade.php ENDPATH**/ ?>