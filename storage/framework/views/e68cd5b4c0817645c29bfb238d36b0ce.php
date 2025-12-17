<?php $__env->startSection('content'); ?>
<div class="page-header">
    <h1 class="page-title"><i class="fas fa-user-plus"></i> <?php echo e(__('messages.add_student')); ?></h1>
    <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> <?php echo e(__('messages.back')); ?>

    </a>
</div>

<div class="card">
    <form method="POST" action="<?php echo e(route('students.store')); ?>">
        <?php echo csrf_field(); ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
            <div class="form-group">
                <label class="form-label"><?php echo e(__('messages.first_name')); ?> *</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo e(old('first_name')); ?>" required>
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label class="form-label"><?php echo e(__('messages.last_name')); ?> *</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo e(old('last_name')); ?>" required>
                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label class="form-label"><?php echo e(__('messages.email')); ?> *</label>
                <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label class="form-label"><?php echo e(__('messages.phone')); ?></label>
                <input type="text" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label class="form-label"><?php echo e(__('messages.birth_date')); ?></label>
                <input type="date" name="birth_date" class="form-control" value="<?php echo e(old('birth_date')); ?>">
                <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label"><?php echo e(__('messages.address')); ?></label>
            <textarea name="address" class="form-control" rows="3"><?php echo e(old('address')); ?></textarea>
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> <?php echo e(__('messages.save')); ?>

            </button>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
                <i class="fas fa-times"></i> <?php echo e(__('messages.cancel')); ?>

            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiantappfonctionnelphp/laravel_app/resources/views/students/create.blade.php ENDPATH**/ ?>