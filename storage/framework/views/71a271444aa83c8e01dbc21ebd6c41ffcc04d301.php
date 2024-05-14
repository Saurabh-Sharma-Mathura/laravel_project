<?php $attributes = $attributes->exceptProps(['thName']); ?>
<?php foreach (array_filter((['thName']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
    <?php echo e($thName); ?>

</th>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/table/table-head.blade.php ENDPATH**/ ?>