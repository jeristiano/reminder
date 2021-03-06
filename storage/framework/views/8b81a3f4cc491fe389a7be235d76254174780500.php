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
                <a class="hover:text-gray-500" href="<?php echo e(route('subscriptions')); ?>"
                   title="所有订阅">订阅</a>
                <svg class="h-5 w-5 fill-current text-white inline-block"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5l7 7-7 7"/>
                </svg>
                添加
            </h3>

            <p class="mt-4 max-w-2xl text-sm text-white">
                注意：不能重复发布任务！
            </p>
        </div>

        <div class="border-t divide-gray-500">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200">

                            <form wire:submit.prevent="submit">
                                <?php echo csrf_field(); ?>
                                <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                    <div class="mt-2 relative rounded-md ">
                                        <label class="text-md ">订阅标签(小时)：</label>
                                        <select wire:model="tag_id" required
                                      class="w-full appearance-none rounded-md  focus:border-indigo-200  border-green-300 "  multiple>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                            <option value="<?php echo e($key); ?>"
                                            ><?php echo e($name); ?></option>
                                            }
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-red-500 px-3 py-3 inline-block ">
                                            <svg class="inline-block h-5 w-6 fill-current text-red-500"
                                                 viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                    <div class="mt-2 relative rounded-md ">
                                        <label class="text-md ">推送时间(小时)：</label>

                                        <input wire:model.lazy="hours"  type="text"

                                               class="mt-2 w-full appearance-none rounded-md  focus:border-indigo-200  border-green-300 text-gray-900">
                                    </div>

                                    <?php $__errorArgs = ['hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-red-500 px-3 py-3 inline-block ">
                                        <svg class="inline-block h-5 w-6 fill-current text-red-500"
                                             viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                                        </svg>
                                        <span><?php echo e($message); ?></span>
                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                    <div class="mt-2 relative rounded-md ">
                                        <label class="text-md ">推送时间(分钟)：</label>

                                        <input wire:model.lazy="minutes"  type="text" class="mt-2 w-full appearance-none rounded-md  focus:border-indigo-200  border-green-300 text-gray-900">
                                    </div>

                                    <?php $__errorArgs = ['minutes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-red-500 px-3 py-3 inline-block ">
                                        <svg class="inline-block h-5 w-6 fill-current text-red-500"
                                             viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                                        </svg>
                                        <span><?php echo e($message); ?></span>
                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="flex justify-between items-center px-5 py-3">
                                    <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded-md text-sm hover:bg-green-500 focus:outline-none">
                                        创建
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/subscription-create.blade.php ENDPATH**/ ?>