<div class="container mx-auto px-4 py-4">
   <div class="mb-4">
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
    <div class="max-auto w-full bg-white shadow-md rounded-md overflow-hidden border">

        <form wire:submit.prevent="submit">
            <div
                class="flex justify-between items-center px-5 py-3 text-gray-700 border-b  w-full">
                <h3 class="text-md">
                    <a class="hover:text-green-500" href="<?php echo e(route('publish')); ?>"
                       title="发布">发布</a>
                    <svg class="h-5 w-5 fill-current text-green-600 inline-block"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                    创建
                </h3>
            </div>


            <div class="px-5 py-5 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md ">
                    <label class="text-md ">主题：</label>
                    <input type="text" wire:model.lazy="title" class="mt-2 w-full appearance-none
                    rounded-md focus:border-indigo-200 border-green-400 text-gray-900">
                    <?php $__errorArgs = ['title'];
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


            <div class="px-5 py-1 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md">
                    <label
                        class="text-md mb-2">标签：</label>
                    <select type="text" class="w-full  mt-2 appearance-none rounded-md
                    focus:border-indigo-200 border-green-400 text-sm text-gray-900"
                            wire:model="tag_id" >
                        <option value="" selected="selected">请选择一个</option>
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>" <?php if($name==$tags->first()): ?> selected="selected"
                            <?php endif; ?>><?php echo e($name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php $__errorArgs = ['tag_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 inline-block ">
                    <svg class="inline-block h-5 w-6 fill-current text-red-500"
                         viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833
                    10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                    </svg>
                    <span><?php echo e($message); ?></span>
                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div class="px-5 py-6 bg-gray-200">
                <div wire:ignore>
                    <label class="text-md text-gray-900">内容：</label>
                    <textarea wire:model="text" id="<?php echo e($elementId); ?>"
                              placeholder="批量请使用-----分隔符"></textarea>
                </div>

                <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500 inline-block ">
                    <svg class="inline-block h-5 w-6 fill-current text-red-500"
                         viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833
                    10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
                    </svg>
                    <span><?php echo e($message); ?></span>
                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="flex justify-between items-center px-5 py-3">
                <button type="reset" class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200
                hover:bg-gray-300 focus:outline-none">
                    重置
                </button>
                <button type="submit"
                        class="px-3 py-1 bg-green-600 text-white rounded-md text-sm hover:bg-green-500 focus:outline-none">
                    发布
                </button>
            </div>
        </form>
    </div>
</div>




<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>

    <script>

        document.addEventListener('livewire:load', function () {
            const easyMDE = new EasyMDE({
                toolbar: ["horizontal-rule","bold", "italic", "heading", "|", "quote",
                    "code", "ordered-list","unordered-list","|","preview","fullscreen"],
                element: document.getElementById('<?php echo e($elementId); ?>'),
                forceSync: true
            });

            easyMDE.codemirror.on("blur", function () {
            window.livewire.find('<?php echo e($_instance->id); ?>').text
                = easyMDE.value();
            });
        });
    </script>

<?php $__env->stopSection(); ?>




<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/publish.blade.php ENDPATH**/ ?>