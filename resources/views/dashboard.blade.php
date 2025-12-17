@extends('layouts.app')

@section('content')
<style>
    .dashboard-container {
        background: #f5f5f5;
        min-height: calc(100vh - 80px);
        padding: 10vh 45vh;
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
        background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        text-align:left;

    }
    
    .stat-number {
        font-size: 1rem;
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
        background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
    <div class="welcome-card">
        <h2>
            <i class="fas fa-question-circle welcome-icon"></i>
            {{ __('messages.welcome_dashboard') }}
        </h2>
        <p>{{ __('messages.welcome_message', ['name' => Auth::user()->name]) }}</p>
    </div>
    
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-icon-circle">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $stats['total_students'] }}</div>
                <div class="stat-label">{{ __('messages.total_students') }}</div>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon-circle">
                <i class="fas fa-calendar"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ now()->format('d/m/Y') }}</div>
                <div class="stat-label">{{ __('messages.date_of_day') }}</div>
            </div>
        </div>
    </div>
    
    <div class="recent-students-card">
        <div class="recent-students-header">
            <h2>
                <i class="fas fa-clock"></i>
                {{ __('messages.recent_students') }}
            </h2>
            <a href="{{ route('students.index') }}" class="btn btn-primary">
                {{ __('messages.view_all') }} <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        @if($stats['recent_students']->count() > 0)
            <div class="students-grid">
                @foreach($stats['recent_students'] as $student)
                <div class="student-card">
                    <div class="student-header">
                        <div class="student-avatar">
                            {{ strtoupper(substr($student->first_name, 0, 1) . substr($student->last_name, 0, 1)) }}
                        </div>
                        <h3 class="student-name">{{ $student->first_name }} {{ $student->last_name }}</h3>
                    </div>
                    <div class="student-info">
                        <div class="student-info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:{{ $student->email }}">
                                {{ $student->email }}
                                <i class="fas fa-edit edit-icon"></i>
                            </a>
                        </div>
                        @if($student->phone)
                        <div class="student-info-item">
                            <i class="fas fa-phone"></i>
                            <span>{{ $student->phone }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p style="text-align: center; color: #666; padding: 2rem;">
                <i class="fas fa-inbox" style="font-size: 2rem; display: block; margin-bottom: 1rem;"></i>
                {{ __('messages.no_students') }}
            </p>
        @endif
    </div>
</div>
@endsection
