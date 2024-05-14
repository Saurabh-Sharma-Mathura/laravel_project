<?php $attributes = $attributes->exceptProps(['tdName']); ?>
<?php foreach (array_filter((['tdName']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<td class="py-4 px-6 border-b border-grey-light"><?php echo e($tdName); ?></td>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/table/table-data.blade.php ENDPATH**/ ?>