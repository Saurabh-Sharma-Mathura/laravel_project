<?php $attributes = $attributes->exceptProps(['contentName', 'contents']); ?>
<?php foreach (array_filter((['contentName', 'contents']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flex">
    <div class="w-1/3 border border-gray-100 shadow">
        <p class="font-bold font-sans mt-2 text-right mr-2"><?php echo e($contentName); ?></p>
    </div>
    <div class="w-2/3 border border-gray-50 inner-shadow">
        <p class="ml-2 mt-2 font-sans break-words leading-relaxed"><?php echo e($contents); ?></p>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/content-layout.blade.php ENDPATH**/ ?>