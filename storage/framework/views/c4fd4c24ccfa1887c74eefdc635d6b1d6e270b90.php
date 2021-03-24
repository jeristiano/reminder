<dl>
    <div class="bg-gray-50 px-4 py-5 sm:gap-4 sm:px-6">
        <ul class="divide-y divide-gray-300">
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
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="mt-2 mb-6">
                    <div class="text-gray-700 mt-4 text-lg hover:text-green-500 leading-10">
                        <a href="<?php echo e(route('preview', ['id'=>$content->id])); ?>" target="_blank"
                           title="预览邮件：<?php echo e($content->title); ?>">
                            <?php echo e($content->title); ?>

                        </a>
                    </div>

                    <div class="markdown text-sm pl-4 mt-5 mb-3 bg-gray-100 border-8
                    border-gray-100">
                        <?php echo $content->text; ?>

                    </div>

                    <small class="text-sm">

                        <a class="text-sm text-gray-500" href="<?php echo e(route('content',
                        ['tag'=>$content->tag->id])); ?>"
                           title="<?php echo e($content->tag->name); ?>">
                            <svg class="w-4 h-4 fill-current inline-block"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fillRule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clipRule="evenodd" />
                            </svg>
                            <?php echo e($content->tag->name); ?>

                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="timeago text-gray-500"><?php echo e($content->updated_at->diffForHumans()); ?></span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                        </svg>
                        <a href="<?php echo e(route('content.edit', [$content->id,'page'=>$page])); ?>"
                           class="text-sm text-blue-500">
                            编辑
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" class="w-4 h-4 fill-current inline-block  text-gray-500">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <a href="<?php echo e(route('content.delete', [$content->id,'page'=>$page])); ?>"
                           class="text-sm text-red-500" onClick="return confirm('确定删除?')">
                            删除
                        </a>
                    </small>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="pt-6 pb-8 pl-6 pr-6 space-y-2 md:space-y-5">
        <?php echo e($contents->appends(['page' => $page])->onEachSide(0)->links()); ?>

    </div>
</dl>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/content.blade.php ENDPATH**/ ?>