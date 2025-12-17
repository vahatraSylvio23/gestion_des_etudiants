<?php $__env->startSection('content'); ?>
<div style="background: #f8f9fa; min-height: calc(100vh - 80px); padding: 2rem; padding-bottom:0rem;">
    <div style="max-width: 1000px; margin: 3rem auto;">
        
        <!-- Page Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;  border-bottom: 1px solid #d1d1d1; padding-bottom: 2rem;">
            <h1 style="font-size: 1.8rem; color: #333; margin: 0; display: flex; align-items: center; gap: 0.75rem; font-weight: 600;">
                <i class="fas fa-user-plus" style="font-size: 1.6rem;"></i> 
                Nouvel étudiant
            </h1>
            <a href="<?php echo e(route('students.index')); ?>" 
               style="padding: 0.6rem 1.5rem; 
                      background: white; 
                      color: #495057; 
                      border: 1px solid #dee2e6; 
                      border-radius: 8px; 
                      cursor: pointer; 
                      font-size: 0.95rem; 
                      text-decoration: none; 
                      display: inline-flex; 
                      align-items: center; 
                      gap: 0.5rem;
                      transition: all 0.2s;
                      font-weight: 500;">
                <i class="fas fa-arrow-left"></i> Annuler
            </a>
        </div>

        <!-- Form Container -->
        <div style="background: white; 
                    border-radius: 12px; 
                    box-shadow: 0 2px 12px rgba(0,0,0,0.08); 
                    padding: 3rem;
                    margin: 0rem 4rem;">
            
            <form method="POST" action="<?php echo e(route('students.store')); ?>">
                <?php echo csrf_field(); ?>
                
                <!-- Two Column Grid for Main Fields -->
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin-bottom: 2rem;">
                    
                    <!-- Prénom -->
                    <div>
                        <label style="display: block; 
                                      margin-bottom: 0.6rem; 
                                      font-size: 0.95rem; 
                                      color: #495057; 
                                      font-weight: 500;">
                            Prénom <span style="color: #dc3545;">*</span>
                        </label>
                        <input type="text" 
                               name="first_name" 
                               required 
                               value="<?php echo e(old('first_name')); ?>"
                               style="width: 100%; 
                                      padding: 0.75rem 1rem; 
                                      border: 2px solid #e9ecef; 
                                      border-radius: 8px; 
                                      outline: none; 
                                      font-size: 0.95rem;
                                      transition: border-color 0.2s;"
                               onfocus="this.style.borderColor='#6f42c1'"
                               onblur="this.style.borderColor='#e9ecef'">
                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <!-- Nom -->
                    <div>
                        <label style="display: block; 
                                      margin-bottom: 0.6rem; 
                                      font-size: 0.95rem; 
                                      color: #495057; 
                                      font-weight: 500;">
                            Nom <span style="color: #dc3545;">*</span>
                        </label>
                        <input type="text" 
                               name="last_name" 
                               required 
                               value="<?php echo e(old('last_name')); ?>"
                               style="width: 100%; 
                                      padding: 0.75rem 1rem; 
                                      border: 2px solid #e9ecef; 
                                      border-radius: 8px; 
                                      outline: none; 
                                      font-size: 0.95rem;
                                      transition: border-color 0.2s;"
                               onfocus="this.style.borderColor='#6f42c1'"
                               onblur="this.style.borderColor='#e9ecef'">
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label style="display: block; 
                                      margin-bottom: 0.6rem; 
                                      font-size: 0.95rem; 
                                      color: #495057; 
                                      font-weight: 500;">
                            Email <span style="color: #dc3545;">*</span>
                        </label>
                        <input type="email" 
                               name="email" 
                               required 
                               value="<?php echo e(old('email')); ?>"
                               style="width: 100%; 
                                      padding: 0.75rem 1rem; 
                                      border: 2px solid #e9ecef; 
                                      border-radius: 8px; 
                                      outline: none; 
                                      font-size: 0.95rem;
                                      transition: border-color 0.2s;"
                               onfocus="this.style.borderColor='#6f42c1'"
                               onblur="this.style.borderColor='#e9ecef'">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <!-- Téléphone -->
                    <div>
                        <label style="display: block; 
                                      margin-bottom: 0.6rem; 
                                      font-size: 0.95rem; 
                                      color: #495057; 
                                      font-weight: 500;">
                            Téléphone
                        </label>
                        <input type="text" 
                               name="phone" 
                               value="<?php echo e(old('phone')); ?>"
                               style="width: 100%; 
                                      padding: 0.75rem 1rem; 
                                      border: 2px solid #e9ecef; 
                                      border-radius: 8px; 
                                      outline: none; 
                                      font-size: 0.95rem;
                                      transition: border-color 0.2s;"
                               onfocus="this.style.borderColor='#6f42c1'"
                               onblur="this.style.borderColor='#e9ecef'">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <!-- Date de naissance - Full Width -->
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; 
                                  margin-bottom: 0.6rem; 
                                  font-size: 0.95rem; 
                                  color: #495057; 
                                  font-weight: 500;">
                        Date de naissance
                    </label>
                    <input type="date" 
                           name="birth_date" 
                           value="<?php echo e(old('birth_date')); ?>"
                           style="width: 100%; 
                                  padding: 0.75rem 1rem; 
                                  border: 2px solid #e9ecef; 
                                  border-radius: 8px; 
                                  outline: none; 
                                  font-size: 0.95rem;
                                  transition: border-color 0.2s;"
                           onfocus="this.style.borderColor='#6f42c1'"
                           onblur="this.style.borderColor='#e9ecef'">
                    <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Adresse - Full Width -->
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; 
                                  margin-bottom: 0.6rem; 
                                  font-size: 0.95rem; 
                                  color: #495057; 
                                  font-weight: 500;">
                        Adresse
                    </label>
                    <textarea name="address" 
                              rows="5" 
                              style="width: 100%; 
                                     padding: 0.75rem 1rem; 
                                     border: 2px solid #e9ecef; 
                                     border-radius: 8px; 
                                     outline: none; 
                                     resize: vertical; 
                                     font-family: inherit;
                                     font-size: 0.95rem;
                                     transition: border-color 0.2s;"
                              onfocus="this.style.borderColor='#6f42c1'"
                              onblur="this.style.borderColor='#e9ecef'"><?php echo e(old('address')); ?></textarea>
                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; display: block;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Action Buttons -->
                <div style="display: flex; 
                            gap: 1rem; 
                            border-top: 1px solid #e9ecef; 
                            padding-top: 2rem; 
                            margin-top: 1rem;">
                    
                    <!-- Submit Button -->
                    <button type="submit" 
                            style="padding: 0.75rem 2rem; 
                                   background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                   color: white; 
                                   border: none; 
                                   border-radius: 8px; 
                                   cursor: pointer; 
                                   display: flex; 
                                   align-items: center; 
                                   gap: 0.5rem; 
                                   font-weight: 500; 
                                   font-size: 0.95rem;
                                   transition: all 0.2s;
                                   box-shadow: 0 2px 8px rgba(111, 66, 193, 0.3);"
                            onmouseover="this.style.background='#5a32a3'; this.style.transform='translateY(-1px)'"
                            onmouseout="this.style.background='#6f42c1'; this.style.transform='translateY(0)'">
                        <i class="fas fa-save"></i> Enregistrer
                    </button>
                    
                    <!-- Cancel Button -->
                    <a href="<?php echo e(route('students.index')); ?>" 
                       style="padding: 0.75rem 2rem; 
                              background: #f8f9fa; 
                              color: #495057; 
                              border: 2px solid #e9ecef; 
                              border-radius: 8px; 
                              text-decoration: none; 
                              display: flex; 
                              align-items: center; 
                              gap: 0.5rem; 
                              font-size: 0.95rem;
                              font-weight: 500;
                              transition: all 0.2s;">
                        <i class="fas fa-times"></i> Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Hover effects for cancel button */
    a[href*="students.index"]:hover {
        background: #e9ecef !important;
        border-color: #dee2e6 !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiant_app_laravel/resources/views/students/create.blade.php ENDPATH**/ ?>