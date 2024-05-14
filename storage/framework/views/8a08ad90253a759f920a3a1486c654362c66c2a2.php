<?php $attributes = $attributes->exceptProps(['buttonName']); ?>
<?php foreach (array_filter((['buttonName']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-500 rounded"
        type="submit" <?php echo e($attributes); ?>><?php echo e($buttonName); ?></button>
</div>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/form/button.blade.php ENDPATH**/ ?>