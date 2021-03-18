<div>
    <?php echo e($contact->name); ?>

    <button wire:click="$refresh">refresh</button>  <?php echo e(now()); ?>


    <button wire:click="refreshFoo">refreshParents</button>  <?php echo e(now()); ?>

</div>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/say-hi.blade.php ENDPATH**/ ?>