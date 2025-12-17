<?php $__env->startSection('content'); ?>
<div style="background: #f5f5f5; min-height: calc(100vh - 80px); padding: 2rem;">
    <div style="max-width: 1200px; margin: 0 auto;">
        
        <!-- Page Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h1 style="font-size: 1.5rem; color: #333; margin: 0; display: flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-user-edit"></i> <?php echo e(__('messages.edit_student')); ?>

            </h1>
            <a href="<?php echo e(route('students.index')); ?>" style="padding: 0.5rem 1rem; background: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-arrow-left"></i> <?php echo e(__('messages.back')); ?>

            </a>
        </div>

        <!-- Card Container -->
        <div style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 3rem; margin-bottom: 1rem;">
            
            <form method="POST" action="<?php echo e(route('students.update', $student)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                <!-- Form Grid -->
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-bottom: 1.5rem;">
                    
                    <!-- First Name -->
                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.first_name')); ?> *</label>
                        <input type="text" name="first_name" value="<?php echo e(old('first_name', $student->first_name)); ?>" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Last Name -->
                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.last_name')); ?> *</label>
                        <input type="text" name="last_name" value="<?php echo e(old('last_name', $student->last_name)); ?>" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Email -->
                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.email')); ?> *</label>
                        <input type="email" name="email" value="<?php echo e(old('email', $student->email)); ?>" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Phone -->
                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.phone')); ?></label>
                        <input type="text" name="phone" value="<?php echo e(old('phone', $student->phone)); ?>" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>

                <!-- Birth Date (Full Width) -->
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.birth_date')); ?></label>
                    <input type="date" name="birth_date" value="<?php echo e(old('birth_date', $student->birth_date?->format('Y-m-d'))); ?>" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                    <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Address -->
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;"><?php echo e(__('messages.address')); ?></label>
                    <textarea name="address" rows="3" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; resize: vertical;"><?php echo e(old('address', $student->address)); ?></textarea>
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Buttons -->
                <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                    <button type="submit" style="padding: 0.5rem 1rem; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-save"></i> <?php echo e(__('messages.save')); ?>

                    </button>
                    <a href="<?php echo e(route('students.index')); ?>" style="padding: 0.5rem 1rem; background: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-times"></i> <?php echo e(__('messages.cancel')); ?>

                    </a>
                </div>
            </form>
            
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiant_app_laravel/resources/views/students/edit.blade.php ENDPATH**/ ?>