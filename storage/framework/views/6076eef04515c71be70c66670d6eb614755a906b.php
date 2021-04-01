<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="py-28">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h1 class="text-base text-gray-600 font-semibold tracking-wide
                            uppercase">
                                Welcome Home</h1>
                            <p class="mt-6 leading-8 font-extrabold tracking-tight
                            text-gray-700 sm:text-3xl">
                                敬畏&nbsp&nbsp&nbsp&nbsp是智慧的开端
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                  一切阅读从这里开始

                            </p>
                        </div>

                        <div class="mt-10">
                            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12
                                             w-12 rounded-md bg-pink-500 text-white">
                                            <!-- Heroicon name: outline/globe-alt -->
                                            <svg class="h-6 w-6"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>

                                        </div>
                                        <p class="ml-16 text-2xl font-semibold text-gray-700 leading-6 ">
                                            121
                                        </p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        内容总数
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12
                                             w-12 rounded-md bg-purple-500 text-white">

                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-2xl font-semibold text-gray-700 leading-6 ">
                                            2
                                        </p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        主题数量
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12
                                             w-12 rounded-md bg-indigo-500 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-2xl font-semibold text-gray-700 leading-6 ">
                                            2</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        订阅数
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-2xl font-semibold text-gray-700 leading-6 ">
                                            0</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                       本周发布

                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div class="mt-14"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /data/webroot/www/evenote/resources/views/dashboard.blade.php ENDPATH**/ ?>