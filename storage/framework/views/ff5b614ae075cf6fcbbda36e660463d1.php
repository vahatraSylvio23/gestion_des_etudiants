<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1 class="page-title"><i class="fas fa-users"></i> <?php echo e(__('messages.students')); ?></h1>
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">
        <i class="fas fa-plus"></i> <?php echo e(__('messages.add_student')); ?>

    </a>
</div>

<div class="card">
    <form action="<?php echo e(route('students.index')); ?>" method="GET" class="search-box">
        <input type="text" name="search" class="form-control" placeholder="<?php echo e(__('messages.search_placeholder')); ?>" value="<?php echo e(request('search')); ?>">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i> <?php echo e(__('messages.search')); ?>

        </button>
        <?php if(request('search')): ?>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-times"></i>
            </a>
        <?php endif; ?>
    </form>

    <?php if($students->count() > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('messages.name')); ?></th>
                    <th><?php echo e(__('messages.email')); ?></th>
                    <th><?php echo e(__('messages.phone')); ?></th>
                    <th><?php echo e(__('messages.birth_date')); ?></th>
                    <th><?php echo e(__('messages.actions')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->id); ?></td>
                    <td><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->phone ?? '-'); ?></td>
                    <td><?php echo e($student->birth_date ? $student->birth_date->format('d/m/Y') : '-'); ?></td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('students.show', $student)); ?>" class="btn btn-primary" title="<?php echo e(__('messages.view')); ?>">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo e(route('students.edit', $student)); ?>" class="btn btn-warning" title="<?php echo e(__('messages.edit')); ?>">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('<?php echo e(__('messages.confirm_delete')); ?>')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" title="<?php echo e(__('messages.delete')); ?>">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="pagination">
            <?php echo e($students->appends(['search' => request('search')])->links('pagination::simple-default')); ?>

        </div>
    <?php else: ?>
        <p style="text-align: center; color: #666; padding: 2rem;">
            <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 1rem;"></i>
            <?php echo e(__('messages.no_students')); ?>

        </p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiantappfonctionnelphp/laravel_app/resources/views/students/index.blade.php ENDPATH**/ ?>