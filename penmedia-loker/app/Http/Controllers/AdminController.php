<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Application;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function dashboard()
    {
        $totalJobs = Job::count();
        $totalUsers = User::where('role', 'user')->count();
        $totalApplications = Application::count();
        $recentJobs = Job::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalJobs', 'totalUsers', 'totalApplications', 'recentJobs'));
    }

    public function jobs()
    {
        $jobs = Job::with('company')->latest()->paginate(10);
        return view('admin.jobs.index', compact('jobs'));
    }

    public function users()
    {
        $users = User::where('role', 'user')->latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function applications()
    {
        $applications = Application::with(['job', 'user'])->latest()->paginate(10);
        return view('admin.applications.index', compact('applications'));
    }
}