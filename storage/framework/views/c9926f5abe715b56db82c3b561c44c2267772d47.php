<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>
<body class="font-sans antialiased">
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('hello-world')->html();
} elseif ($_instance->childHasBeenRendered('3MvMcSI')) {
    $componentId = $_instance->getRenderedChildComponentId('3MvMcSI');
    $componentTag = $_instance->getRenderedChildComponentTagName('3MvMcSI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3MvMcSI');
} else {
    $response = \Livewire\Livewire::mount('hello-world');
    $html = $response->html();
    $_instance->logRenderedChild('3MvMcSI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /data/webroot/www/evenote/resources/views/welcome.blade.php ENDPATH**/ ?>