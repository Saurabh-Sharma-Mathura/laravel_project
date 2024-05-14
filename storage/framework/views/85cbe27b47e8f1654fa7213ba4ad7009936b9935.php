<?php $attributes = $attributes->exceptProps(['inputName', 'type' => 'text']); ?>
<?php foreach (array_filter((['inputName', 'type' => 'text']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="mt-2">
    <label class="block text-sm text-gray-600"
        for="<?php echo e($inputName); ?>"><?php echo e(ucwords($inputName)); ?></label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="<?php echo e($type); ?>" name="<?php echo e($inputName); ?>"
        id="<?php echo e($inputName); ?>" <?php echo e($attributes); ?>>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.error','data' => ['inputName' => ''.e($inputName).'']]); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['inputName' => ''.e($inputName).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/components/form/input.blade.php ENDPATH**/ ?>