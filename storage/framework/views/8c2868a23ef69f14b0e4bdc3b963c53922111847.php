<div>
    
    
    
    
    


    

    
    
    
    
    
    
    
    
    
    

    
    
    
    

    


    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('say-hi',['user'=>$contact])->html();
} elseif ($_instance->childHasBeenRendered($contact->name)) {
    $componentId = $_instance->getRenderedChildComponentId($contact->name);
    $componentTag = $_instance->getRenderedChildComponentTagName($contact->name);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($contact->name);
} else {
    $response = \Livewire\Livewire::mount('say-hi',['user'=>$contact]);
    $html = $response->html();
    $_instance->logRenderedChild($contact->name, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <hr>
    <button wire:click="refreshChildren">refreshAll</button>
    <button wire:click="$emit('refreshChildren')">refreshChildren</button>
    <?php echo e(now()); ?>



</div>
<?php /**PATH /data/webroot/www/evenote/resources/views/livewire/hello-world.blade.php ENDPATH**/ ?>