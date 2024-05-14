<?php $attributes = $attributes->exceptProps(['attributeContent', 'attributeName','fontName']); ?>
<?php foreach (array_filter((['attributeContent', 'attributeName','fontName']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="w-full md:w-1/2 xl:w-1/3 p-1">
    <div class="bg-gradient-to-b from-gray-200 to-gray-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-5">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
                <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-<?php echo e($fontName); ?> fa-2x fa-inverse"></i></div>
            </div>
            <div class="flex-1 text-right md:text-center">
                <h5 class="font-bold uppercase text-gray-600"><?php echo e($attributeName); ?></h5>
                <h3 class="font-bold text-3xl"><?php echo e($attributeContent); ?></h3>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/dashboard-panel.blade.php ENDPATH**/ ?>