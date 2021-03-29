<?php if(count($tags)): ?>

    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm font-medium align-left text-gray-900
                        hover:text-green-600"><a
                            href="<?php echo e(route('content',['tag'=>$tag->id])); ?>"> <?php echo e($tag->name); ?></a>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo e($tag->note->count()); ?></div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"> <?php echo e($tag->created_at); ?></div>

            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" class="w-4 h-4 fill-current inline-block
                             text-blue-600">
                    <path
                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                    <path fill-rule="evenodd"
                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                          clip-rule="evenodd"/>
                </svg>

                <a  href="<?php echo e(route('tags.edit',[$tag->id])); ?>"  class="text-sm
                text-blue-600 hover:text-blue-400">
                    编辑
                <a/>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" class="w-4 h-4 fill-current inline-block
                             text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" class="w-4 h-4 fill-current inline-block  text-red-600">
                    <path fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"/>
                </svg>
                <button wire:click="$emit('deleteTag',<?php echo e($tag->id); ?>)" class="text-sm text-red-600
                hover:text-red-400">
                    删除
                </button>
            </td>

        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">

            当前数据为空 ~~~
        </td>
    </tr>

<?php endif; ?>

<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/tags-list.blade.php ENDPATH**/ ?>