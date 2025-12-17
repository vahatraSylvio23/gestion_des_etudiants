<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1 class="page-title"><i class="fas fa-tachometer-alt"></i> <?php echo e(__('messages.dashboard')); ?></h1>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-number"><?php echo e($stats['total_students']); ?></div>
        <div class="stat-label"><i class="fas fa-users"></i> <?php echo e(__('messages.total_students')); ?></div>
    </div>
    <div class="stat-card">
        <div class="stat-number"><?php echo e($stats['total_users']); ?></div>
        <div class="stat-label"><i class="fas fa-user-shield"></i> <?php echo e(__('messages.total_users')); ?></div>
    </div>
</div>

<div class="card">
    <div class="page-header">
        <h2><i class="fas fa-clock"></i> <?php echo e(__('messages.recent_students')); ?></h2>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">
            <?php echo e(__('messages.view_all')); ?> <i class="fas fa-arrow-right"></i>
        </a>
    </div>

    <?php if($stats['recent_students']->count() > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(__('messages.name')); ?></th>
                    <th><?php echo e(__('messages.email')); ?></th>
                    <th><?php echo e(__('messages.phone')); ?></th>
                    <th><?php echo e(__('messages.created_at')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $stats['recent_students']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->phone ?? '-'); ?></td>
                    <td><?php echo e($student->created_at->format('d/m/Y')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center; color: #666; padding: 2rem;">
            <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 1rem;"></i>
            <?php echo e(__('messages.no_students')); ?>

        </p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiantappfonctionnelphp/laravel_app/resources/views/dashboard.blade.php ENDPATH**/ ?>