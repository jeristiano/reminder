<div class="container mx-auto px-4 py-4">
    <div class="max-auto w-full bg-white shadow-md rounded-md overflow-hidden border">
        <form method="POST" action=" <?php echo e(route('content.update',[$content->id,'page'=>$page])); ?> ">
           <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div
                class="flex justify-between items-center px-5 py-3 text-gray-700 border-b  w-full">
                <h3 class="text-md">
                    <a class="hover:text-green-500" href="<?php echo e(route('content',['page'=>$page])); ?>"
                       title="返回内容">内容</a>
                    <svg class="h-5 w-5 fill-current text-green-600 inline-block"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7"/>
                    </svg>
                    修改
                </h3>
            </div>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'text-red-500 px-3 py-3 inline-block']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-red-500 px-3 py-3 inline-block']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md ">
                    <label class="text-md ">主题：</label>
                    <input type="text" required
                           name="title"
                           value="<?php echo e($content->title); ?>"
                           class="mt-2 w-full appearance-none rounded-md  focus:border-indigo-200
                           border-green-300 text-gray-900">

                </div>
            </div>

            <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                <div class="mt-2 relative rounded-md">
                    <label
                        class="text-md mb-2">标签：</label>
                    <select type="text" class="w-full  mt-2 appearance-none rounded-md
                    focus:border-indigo-200 border-green-300 text-sm text-gray-900" name="tag_id" id="">
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                        <option value="<?php echo e($key); ?>" <?php echo e(($content->tag_id == $key ?"selected":"")); ?>><?php echo e($name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            </div>

            <div class="px-5 py-6 bg-gray-200">
                    <label class="text-md text-gray-900">内容：</label>
                    <textarea required name="text" id="editor">
                         <?php echo $content->text; ?>

                    </textarea>
            </div>

            <div class="flex justify-between items-center px-5 py-3">
                <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                    重置
                </button>
                <button type="submit" class="px-3 py-1 bg-green-600 text-white rounded-md text-sm hover:bg-green-500 focus:outline-none">
                    保存
                </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/simditor.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript"  src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/module.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/hotkeys.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/uploader.js')); ?>"></script>
    <script type="text/javascript"  src="<?php echo e(asset('js/simditor.js')); ?>"></script>

    <script>
        $(document).ready(function(){
            var editor = new Simditor({
                textarea: $('#editor'),
            });
        });
    </script>


<?php $__env->stopSection(); ?>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/content-edit.blade.php ENDPATH**/ ?>