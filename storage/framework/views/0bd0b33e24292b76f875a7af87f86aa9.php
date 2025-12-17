<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1 class="page-title"><i class="fas fa-user"></i> <?php echo e(__('messages.student_details')); ?></h1>
    <div style="display: flex; gap: 0.5rem;">
        <a href="<?php echo e(route('students.edit', $student)); ?>" class="btn btn-warning">
            <i class="fas fa-edit"></i> <?php echo e(__('messages.edit')); ?>

        </a>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> <?php echo e(__('messages.back')); ?>

        </a>
    </div>
</div>

<div class="card">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        <div>
            <h3 style="color: #667eea; margin-bottom: 1rem;">
                <i class="fas fa-id-card"></i> <?php echo e(__('messages.personal_info')); ?>

            </h3>
            <table style="width: 100%;">
                <tr>
                    <td style="padding: 0.5rem 0; color: #666; width: 40%;"><?php echo e(__('messages.first_name')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->first_name); ?></td>
                </tr>
                <tr>
                    <td style="padding: 0.5rem 0; color: #666;"><?php echo e(__('messages.last_name')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->last_name); ?></td>
                </tr>
                <tr>
                    <td style="padding: 0.5rem 0; color: #666;"><?php echo e(__('messages.birth_date')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->birth_date ? $student->birth_date->format('d/m/Y') : '-'); ?></td>
                </tr>
            </table>
        </div>
        <div>
            <h3 style="color: #667eea; margin-bottom: 1rem;">
                <i class="fas fa-address-book"></i> <?php echo e(__('messages.contact_info')); ?>

            </h3>
            <table style="width: 100%;">
                <tr>
                    <td style="padding: 0.5rem 0; color: #666; width: 40%;"><?php echo e(__('messages.email')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->email); ?></td>
                </tr>
                <tr>
                    <td style="padding: 0.5rem 0; color: #666;"><?php echo e(__('messages.phone')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->phone ?? '-'); ?></td>
                </tr>
                <tr>
                    <td style="padding: 0.5rem 0; color: #666;"><?php echo e(__('messages.address')); ?>:</td>
                    <td style="padding: 0.5rem 0; font-weight: 500;"><?php echo e($student->address ?? '-'); ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #eee; color: #999; font-size: 0.85rem;">
        <i class="fas fa-clock"></i> <?php echo e(__('messages.created_at')); ?>: <?php echo e($student->created_at->format('d/m/Y H:i')); ?>

        &nbsp;|&nbsp;
        <i class="fas fa-edit"></i> <?php echo e(__('messages.updated_at')); ?>: <?php echo e($student->updated_at->format('d/m/Y H:i')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiant_app_laravel/resources/views/students/show.blade.php ENDPATH**/ ?>