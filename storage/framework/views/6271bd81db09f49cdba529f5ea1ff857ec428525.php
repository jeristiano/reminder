<?php $__env->startComponent('mail::message'); ?>

# 每日箴言 <?php echo e(\Carbon\Carbon::today()->toDateString()); ?>

<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

`<?php echo e($message->tag->name); ?>`

##  <?php echo e($message->title); ?>


<?php echo $message->text; ?>


-----

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::footer'); ?>

<?php if (isset($__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c)): ?>
<?php $component = $__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c; ?>
<?php unset($__componentOriginala991192d5a5d5f731a8cf5f31528af3b372f333c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /data/webroot/www/evenote/resources/views/emails/deliver.blade.php ENDPATH**/ ?>