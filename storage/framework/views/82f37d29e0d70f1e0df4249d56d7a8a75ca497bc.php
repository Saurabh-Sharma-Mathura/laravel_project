<?php $attributes = $attributes->exceptProps(['sectionName']); ?>
<?php foreach (array_filter((['sectionName']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<h1 class="text-3xl text-black font-thin tracking-tighter pb-1"><?php echo e($sectionName); ?></h1>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/section-header.blade.php ENDPATH**/ ?>