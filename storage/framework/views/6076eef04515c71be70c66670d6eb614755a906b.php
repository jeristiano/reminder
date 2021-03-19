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
                                             w-12 rounded-md bg-green-500 text-white">
                                            <!-- Heroicon name: outline/globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">
                                            内容总数</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        当前共有内容数量:121 条
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                            <!-- Heroicon name: outline/scale -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">
                                            主题</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        当前共有主题数量:2 个
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                            <!-- Heroicon name: outline/lightning-bolt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">
                                            订阅</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        当前推送任务总量为:2个
                                    </dd>
                                </div>

                                <div class="relative">
                                    <dt>
                                        <div
                                            class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                            <!-- Heroicon name: outline/annotation -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                            </svg>
                                        </div>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">
                                           本周发布</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">
                                        本周发布内容数量:0条

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