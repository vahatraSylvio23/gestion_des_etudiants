<?php $__env->startSection('content'); ?>
<div style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
    <div class="card" style="max-width: 400px; width: 100%;">
        <div style="text-align: center; margin-bottom: 2rem;">
            <i class="fas fa-graduation-cap" style="font-size: 3rem; color: #667eea;"></i>
            <h1 style="color: #667eea; margin-top: 1rem;"><?php echo e(__('messages.welcome')); ?></h1>
            <p style="color: #666;"><?php echo e(__('messages.login_subtitle')); ?></p>
            <p style="color: #999; font-size: 0.85rem;">Test: admin@example.com / admin123</p>
        </div>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-envelope"></i> <?php echo e(__('messages.email')); ?>

                </label>
                <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required autofocus>
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
                <label class="form-label">
                    <i class="fas fa-lock"></i> <?php echo e(__('messages.password')); ?>

                </label>
                <input type="password" name="password" class="form-control" required>
                <?php $__errorArgs = ['password'];
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
                <label style="display: flex; align-items: center; gap: 0.5rem;">
                    <input type="checkbox" name="remember">
                    <?php echo e(__('messages.remember_me')); ?>

                </label>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                <i class="fas fa-sign-in-alt"></i> <?php echo e(__('messages.login')); ?>

            </button>
        </form>

        <div style="text-align: center; margin-top: 1.5rem;">
            <div class="language-switcher" style="justify-content: center;">
                <a href="<?php echo e(route('language.switch', 'fr')); ?>" class="<?php echo e(app()->getLocale() == 'fr' ? 'active' : ''); ?>">🇫🇷 Français</a>
                <a href="<?php echo e(route('language.switch', 'en')); ?>" class="<?php echo e(app()->getLocale() == 'en' ? 'active' : ''); ?>">🇬🇧 English</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/runner/workspace/laravel_app/resources/views/auth/login.blade.php ENDPATH**/ ?>