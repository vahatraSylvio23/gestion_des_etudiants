<?php $__env->startSection('content'); ?>
<style>
    .dashboard-container {
        background: #f5f5f5;
        min-height: calc(100vh - 80px);
        padding: 2rem;
    }
    
    .welcome-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .welcome-card h2 {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #333;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
    }
    
    .welcome-card .welcome-icon {
        font-size: 1.5rem;
        color: #667eea;
    }
    
    .welcome-card p {
        color: #666;
        margin: 0;
    }
    
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    
    .stat-icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #667eea;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .stat-icon-circle i {
        color: white;
        font-size: 1.5rem;
    }
    
    .stat-content {
        flex: 1;
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        color: #666;
        font-size: 0.9rem;
    }
    
    .recent-students-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .recent-students-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .recent-students-header h2 {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #333;
        font-size: 1.25rem;
        margin: 0;
    }
    
    .recent-students-header h2 i {
        color: #667eea;
    }
    
    .students-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    
    .student-card {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 1.5rem;
        border: 1px solid #e0e0e0;
        transition: all 0.3s;
    }
    
    .student-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transform: translateY(-2px);
    }
    
    .student-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }
    
    .student-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #667eea;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .student-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin: 0;
    }
    
    .student-info {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .student-info-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #666;
        font-size: 0.9rem;
    }
    
    .student-info-item i {
        color: #667eea;
        width: 16px;
    }
    
    .student-info-item a {
        color: #666;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .student-info-item a:hover {
        color: #667eea;
    }
    
    .edit-icon {
        font-size: 0.75rem;
        opacity: 0.6;
    }
</style>

<div class="dashboard-container">
    <!-- Carte de bienvenue -->
    <div class="welcome-card">
        <h2>
            <i class="fas fa-question-circle welcome-icon"></i>
            <?php echo e(__('messages.welcome_dashboard')); ?>

        </h2>
        <p><?php echo e(__('messages.welcome_message', ['name' => Auth::user()->name])); ?></p>
    </div>
    
    <!-- Cartes de statistiques -->
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-icon-circle">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number"><?php echo e($stats['total_students']); ?></div>
                <div class="stat-label"><?php echo e(__('messages.total_students')); ?></div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon-circle">
                <i class="fas fa-calendar"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number"><?php echo e(now()->format('d/m/Y')); ?></div>
                <div class="stat-label"><?php echo e(__('messages.date_of_day')); ?></div>
            </div>
        </div>
    </div>
    
    <!-- Section Étudiants récents -->
    <div class="recent-students-card">
        <div class="recent-students-header">
            <h2>
                <i class="fas fa-clock"></i>
                <?php echo e(__('messages.recent_students')); ?>

            </h2>
            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">
                <?php echo e(__('messages.view_all')); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        <?php if($stats['recent_students']->count() > 0): ?>
            <div class="students-grid">
                <?php $__currentLoopData = $stats['recent_students']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="student-card">
                    <div class="student-header">
                        <div class="student-avatar">
                            <?php echo e(strtoupper(substr($student->first_name, 0, 1) . substr($student->last_name, 0, 1))); ?>

                        </div>
                        <h3 class="student-name"><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></h3>
                    </div>
                    <div class="student-info">
                        <div class="student-info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo e($student->email); ?>">
                                <?php echo e($student->email); ?>

                                <i class="fas fa-edit edit-icon"></i>
                            </a>
                        </div>
                        <?php if($student->phone): ?>
                        <div class="student-info-item">
                            <i class="fas fa-phone"></i>
                            <span><?php echo e($student->phone); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p style="text-align: center; color: #666; padding: 2rem;">
                <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 1rem;"></i>
                <?php echo e(__('messages.no_students')); ?>

            </p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/vahatra/Downloads/etudiantappfonctionnelphp/etudiant_app_laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>