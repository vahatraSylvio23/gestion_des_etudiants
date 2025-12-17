<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 1rem;">
    <div style="background: white; border-radius: 12px; padding: 2.5rem 2rem; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); max-width: 400px; width: 100%;">
        
        <div style="text-align: center; margin-bottom: 2rem;">
            <h1 style="color: #667eea; font-size: 1.75rem; font-weight: 600; margin: 1rem 0 0.5rem;"><i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: #667eea;"></i><?php echo e(__('messages.welcome')); ?></h1>
            <p style="color: #666; margin: 0.25rem 0; font-size: 0.95rem;"><?php echo e(__('messages.login_subtitle')); ?></p>
            <p style="color: #999; font-size: 0.85rem; margin-top: 0.5rem;">Test: admin / admin123</p>
        </div>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            
            <div style="margin-bottom: 1.25rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; font-weight: 500; color: #333; margin-bottom: 0.5rem;">
                    <i class="fas fa-user" style="width: 16px; text-align: center;"></i> <?php echo e(__('messages.username')); ?>

                </label>
                <input type="text" name="username" value="<?php echo e(old('username')); ?>" required autofocus style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #e0e0e0; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="color: #e74c3c; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div style="margin-bottom: 1.25rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.9rem; font-weight: 500; color: #333; margin-bottom: 0.5rem;">
                    <i class="fas fa-lock" style="width: 16px; text-align: center;"></i> <?php echo e(__('messages.password')); ?>

                </label>
                <input type="password" name="password" required style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #e0e0e0; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="color: #e74c3c; font-size: 0.85rem; margin-top: 0.25rem;"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <button type="submit" style="width: 100%; padding: 0.875rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 6px; font-size: 1rem; font-weight: 500; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 0.5rem; box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);">
                <i class="fas fa-sign-in-alt"></i> <?php echo e(__('messages.login')); ?>

            </button>
        </form>

        <div style="text-align: center; margin-top: 1.5rem;">
            <select onchange="window.location.href=this.value" style="padding: 0.5rem 1rem; border: 1px solid #e0e0e0; border-radius: 6px; font-size: 0.9rem; cursor: pointer; background: white; color: #667eea;">
                <option value="<?php echo e(route('language.switch', 'fr')); ?>" <?php echo e(app()->getLocale() == 'fr' ? 'selected' : ''); ?>>
                    🇫🇷 Français
                </option>
                <option value="<?php echo e(route('language.switch', 'en')); ?>" <?php echo e(app()->getLocale() == 'en' ? 'selected' : ''); ?>>
                    🇬🇧 English
                </option>
            </select>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/etudiant_app_laravel/resources/views/auth/login.blade.php ENDPATH**/ ?>