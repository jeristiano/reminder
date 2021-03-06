<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <?php echo \Livewire\Livewire::styles(); ?>


    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>
<body class="font-sans antialiased">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<div class="min-h-screen bg-gray-100">

    <!-- Page Heading -->
    <?php if(isset($header)): ?>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </header>
<?php endif; ?>

<!-- Page Content -->
    <main>
       <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>

<?php if(empty($hidden_footer)): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer', [])->html();
} elseif ($_instance->childHasBeenRendered('vHauWoW')) {
    $componentId = $_instance->getRenderedChildComponentId('vHauWoW');
    $componentTag = $_instance->getRenderedChildComponentTagName('vHauWoW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vHauWoW');
} else {
    $response = \Livewire\Livewire::mount('footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('vHauWoW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endif; ?>
<?php echo $__env->yieldPushContent('modals'); ?>

<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /data/webroot/www/evenote/resources/views/layouts/dashborad.blade.php ENDPATH**/ ?>