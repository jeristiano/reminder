<?php $__currentLoopData = array_flip(['Error'=>'red-500', 'Warning'=>'yellow-500', 'Success'=>'green-400',
'Info'=>'blue-400']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color=>$msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(session()->has($msg)): ?>
            <div class="overflow-x-auto">
                <div
                    class="inline-flex w-full bg-white shadow-md rounded-lg
                    overflow-hidden">
                    <div class="flex justify-center items-center w-12 bg-<?php echo e($color); ?>">

                        <?php echo $__env->make('components.message_svg',['msg'=>$msg], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>
                    <div class="-mx-3 py-2 px-4">
                        <div class="mx-3"><span class="text-<?php echo e($color); ?> font-semibold"><?php echo e($msg); ?></span>
                            <p class="text-gray-600 text-sm">  <?php echo e(session()->get($msg)); ?> </p>
                        </div>
                    </div>
                </div>
            </div>

    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php /**PATH /data/webroot/www/evenote/resources/views/components/message.blade.php ENDPATH**/ ?>