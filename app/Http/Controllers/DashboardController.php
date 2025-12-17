<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_students' => Student::count(),
            'total_users' => User::count(),
            'recent_students' => Student::orderBy('created_at', 'desc')->take(3)->get(),
        ];

        return view('dashboard', compact('stats'));
    }
}
