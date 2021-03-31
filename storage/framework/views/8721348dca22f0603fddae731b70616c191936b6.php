<div class="mt-10 container mx-auto px-8 md:w-2/4">
    <div class="mb-3">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.message','data' => []]); ?>
<?php $component->withName('message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">

        <div class="px-4 py-5 sm:px-6 bg-green-500">
            <h3 class="text-base leading-6 font-medium text-white">
                <a class="hover:text-black" href="<?php echo e(route('subscriptions')); ?>" title="所有内容">订阅</a>
            </h3>
            <p class="mt-4 max-w-2xl text-sm text-white">
                当前共有订阅: <?php echo e($subscriptions->count()); ?> 个！
            </p>
        </div>

        <div class="border-t divide-gray-500">

            <div  class="flex px-3 py-3">
                <a href="<?php echo e(route('subscriptions.create')); ?>" class="px-3 py-1 bg-green-600 text-white
                rounded-md text-sm
                hover:bg-green-500 focus:outline-none">创建
                </a>

            </div>


            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        订阅便签
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        设置时间
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        执行时间
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        创建时间
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-base font-medium
                                        text-gray-500 uppercase tracking-wider">
                                        修改
                                    </th>

                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscription-list', ['tags' => $tags,'subscriptions' => $subscriptions])->html();
} elseif ($_instance->childHasBeenRendered('sWbooqW')) {
    $componentId = $_instance->getRenderedChildComponentId('sWbooqW');
    $componentTag = $_instance->getRenderedChildComponentTagName('sWbooqW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sWbooqW');
} else {
    $response = \Livewire\Livewire::mount('subscription-list', ['tags' => $tags,'subscriptions' => $subscriptions]);
    $html = $response->html();
    $_instance->logRenderedChild('sWbooqW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </tbody>
                            </table>
                            <div class="pt-6 pb-8 pl-6 pr-6 space-y-2 md:space-y-5">
                                <?php echo e($subscriptions->onEachSide(0)->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/subscription.blade.php ENDPATH**/ ?>