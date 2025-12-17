<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Gestion Étudiants')); ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .navbar { background: white; padding: 1rem 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center; }
        .navbar-brand { font-size: 1.5rem; font-weight: bold; color: #667eea; text-decoration: none; display: flex; align-items: center; gap: 0.5rem; }
        .navbar-nav { display: flex; gap: 1rem; align-items: center; }
        .nav-link { color: #666; text-decoration: none; padding: 0.5rem 1rem; border-radius: 5px; transition: all 0.3s; }
        .nav-link:hover { background: #f0f0f0; color: #667eea; }
        .nav-link.active { background: #667eea; color: white; }
        .container { max-width: 1200px; margin: 2rem auto; padding: 0 1rem; }
        .card { background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 2rem; margin-bottom: 1rem; }
        .btn { padding: 0.5rem 1rem; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; transition: all 0.3s; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; }
        .btn-primary { background: #667eea; color: white; }
        .btn-primary:hover { background: #5a6fd6; }
        .btn-success { background: #28a745; color: white; }
        .btn-success:hover { background: #218838; }
        .btn-warning { background: #ffc107; color: #212529; }
        .btn-warning:hover { background: #e0a800; }
        .btn-danger { background: #dc3545; color: white; }
        .btn-danger:hover { background: #c82333; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn-secondary:hover { background: #5a6268; }
        .alert { padding: 1rem; border-radius: 5px; margin-bottom: 1rem; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .form-group { margin-bottom: 1rem; }
        .form-label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333; }
        .form-control { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; }
        .form-control:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102,126,234,0.2); }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { padding: 1rem; text-align: left; border-bottom: 1px solid #eee; }
        .table th { background: #f8f9fa; font-weight: 600; color: #333; }
        .table tr:hover { background: #f8f9fa; }
        .language-switcher { display: flex; gap: 0.5rem; }
        .language-switcher a { padding: 0.25rem 0.5rem; border-radius: 3px; text-decoration: none; font-size: 0.85rem; }
        .language-switcher a.active { background: #667eea; color: white; }
        .language-switcher a:not(.active) { background: #eee; color: #666; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .page-title { font-size: 1.5rem; color: #333; }
        .search-box { display: flex; gap: 0.5rem; margin-bottom: 1rem; }
        .search-box input { flex: 1; }
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 2rem; }
        .stat-card { background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 3px 10px rgba(0,0,0,0.1); text-align: center; }
        .stat-number { font-size: 2.5rem; font-weight: bold; color: #667eea; }
        .stat-label { color: #666; margin-top: 0.5rem; }
        .actions { display: flex; gap: 0.5rem; }
        .pagination { display: flex; justify-content: center; gap: 0.25rem; margin-top: 1rem; }
        .pagination a, .pagination span { padding: 0.5rem 0.75rem; border: 1px solid #ddd; border-radius: 3px; text-decoration: none; color: #667eea; }
        .pagination a:hover { background: #667eea; color: white; }
        .pagination .active { background: #667eea; color: white; }
        .error { color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem; }
    </style>
</head>
<body>
    <?php if(auth()->guard()->check()): ?>
    <nav class="navbar">
        <a href="<?php echo e(route('dashboard')); ?>" class="navbar-brand">
            <i class="fas fa-graduation-cap"></i>
            <?php echo e(config('app.name', 'Gestion Étudiants')); ?>

        </a>
        <div class="navbar-nav">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                <i class="fas fa-home"></i> <?php echo e(__('messages.dashboard')); ?>

            </a>
            <a href="<?php echo e(route('students.index')); ?>" class="nav-link <?php echo e(request()->routeIs('students.*') ? 'active' : ''); ?>">
                <i class="fas fa-users"></i> <?php echo e(__('messages.students')); ?>

            </a>
            <div class="language-switcher">
                <a href="<?php echo e(route('language.switch', 'fr')); ?>" class="<?php echo e(app()->getLocale() == 'fr' ? 'active' : ''); ?>">🇫🇷 FR</a>
                <a href="<?php echo e(route('language.switch', 'en')); ?>" class="<?php echo e(app()->getLocale() == 'en' ? 'active' : ''); ?>">🇬🇧 EN</a>
            </div>
            <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-secondary">
                    <i class="fas fa-sign-out-alt"></i> <?php echo e(__('messages.logout')); ?>

                </button>
            </form>
        </div>
    </nav>
    <?php endif; ?>

    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /home/runner/workspace/laravel_app/resources/views/layouts/app.blade.php ENDPATH**/ ?>