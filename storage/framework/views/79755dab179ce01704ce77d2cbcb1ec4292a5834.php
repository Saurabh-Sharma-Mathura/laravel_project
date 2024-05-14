<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.sub-section-panel','data' => ['sectionName' => 'Task: '.e($task->title).'']]); ?>
<?php $component->withName('sub-section-panel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['sectionName' => 'Task: '.e($task->title).'']); ?>
    
    <section>
        <div class="container">
                       
            <?php if(auth()->guard()->check()): ?>                
                <div class="flex flex-row-reverse space-x-reverse">
                    <form method="post" action="/task/<?php echo e($task->id); ?>" onsubmit="return confirm('Please confirm task deletion')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="bg-red-500 h-10 w-10 rounded"><i class="fas fa-trash-alt fa-inverse"></i></button>
                    </form>
                    <?php if(!$task->completed): ?> 
                                                
                        <button class="bg-green-500 h-10 w-10 rounded">
                            <a href="/task/<?php echo e($task->id); ?>/notify">
                                <i class="fas fa-envelope fa-inverse"></i>
                            </a>
                        </button>
                        
                        <button class="bg-blue-500 h-10 w-10">
                            <a href="/task/<?php echo e($task->id); ?>/edit"> 
                                <i class="fas fa-edit fa-inverse"></i>
                            </a>
                        </button> 
                        
                        <form method="post" action="/task/<?php echo e($task->id); ?>/completed" onsubmit="return confirm('Please confirm task completion, notification will be sent')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <button class="bg-blue-300 h-10 w-auto rounded">Mark Complete</button>
                        </form>
                    <?php else: ?>
                        <button class="bg-blue-500 h-10 w-300" disabled>Task Completed</button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.content-layout','data' => ['contentName' => 'Date Created','contents' => ''.e(date('d/m/Y', strtotime($task->created_at))).'']]); ?>
<?php $component->withName('content-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentName' => 'Date Created','contents' => ''.e(date('d/m/Y', strtotime($task->created_at))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.content-layout','data' => ['contentName' => 'Due Date','contents' => ''.e(date('d/m/Y', strtotime($task->due))).'']]); ?>
<?php $component->withName('content-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentName' => 'Due Date','contents' => ''.e(date('d/m/Y', strtotime($task->due))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.content-layout','data' => ['contentName' => 'Created by','contents' => ''.e($task->getTaskCreatorUser()).'']]); ?>
<?php $component->withName('content-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentName' => 'Created by','contents' => ''.e($task->getTaskCreatorUser()).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.content-layout','data' => ['contentName' => 'Assigned to','contents' => ''.e($task->getAssignedUser()).'']]); ?>
<?php $component->withName('content-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentName' => 'Assigned to','contents' => ''.e($task->getAssignedUser()).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.content-layout','data' => ['contentName' => 'Description','contents' => ''.e($task->description).'']]); ?>
<?php $component->withName('content-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentName' => 'Description','contents' => ''.e($task->description).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        </div>
    </section>
<!--     <hr class="bg-gray-500 my-5">

    
    <div class="row flex mt-2">
         
        <div class="bg-gray-500 border border-blue-100 w-1/3">
            <form action="/task/<?php echo e($task->id); ?>/comment" method="post"
                class="bg-gray-100 border border-gray-200 p-2 rounded-xl">
                <?php echo csrf_field(); ?>
                <header class="flex item-center">
                    <h2 class="ml-3">
                        Task Comments
                    </h2>
                </header>
                <div>
                    <textarea name="body" class="w-full mt-2 rounded" cols="30" rows="3"
                        placeholder="Quick Updates...." required></textarea>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.error','data' => ['inputName' => 'body']]); ?>
<?php $component->withName('form.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['inputName' => 'body']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.button','data' => ['buttonName' => 'post']]); ?>
<?php $component->withName('form.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['buttonName' => 'post']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php else: ?>
                    <p class="font-bold "><a href="/login" class="underline">Sign in</a> to post a comment on this
                        Task</p>
                <?php endif; ?>
            </form>
        </div>
 -->
       <!--  
        <div class="bg-gray-100 border border-gray-200 p-2 rounded-xl w-2/3">
            <?php if($task->comments->count()): ?>
                <?php $__currentLoopData = $task->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row flex">
                        <span class=""><?php echo e($comment->created_at); ?>, </span>
                        <span class="font-bold"><?php echo e($comment->user->name); ?> : </span>
                        <p><?php echo e($comment->body); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p class="font-bold justify self-center">No Comments on this task......</p>
            <?php endif; ?>
        </div> -->
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\carziro\laravel21\resources\views/task/show.blade.php ENDPATH**/ ?>