<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;
use App\Models\User;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_users' => User::where('role', 'user')->count(),
            'total_companies' => User::where('role', 'company')->count(),
            'total_jobs' => JobListing::count(),
            'total_applications' => JobApplication::count(),
        ];

        $recentUsers = User::where('role', 'user')->latest()->take(5)->get();
        $recentCompanies = User::where('role', 'company')->latest()->take(5)->get();
        $recentJobs = JobListing::with('company')->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentUsers', 'recentCompanies', 'recentJobs'));
    }

    public function users()
    {
        $users = User::where('role', 'user')->latest()->get();
        return view('admin.users', compact('users'));
    }

    public function companies()
    {
        $companies = User::where('role', 'company')->withCount('jobListings')->latest()->get();
        return view('admin.companies', compact('companies'));
    }

    public function jobs()
    {
        $jobs = JobListing::with('company')->withCount('applications')->latest()->get();
        return view('admin.jobs', compact('jobs'));
    }

    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            
            if ($user->role === 'admin') {
                return back()->with('error', 'Tidak dapat menghapus admin!');
            }
            
            // Hapus relasi terkait
            if ($user->role === 'user') {
                $user->jobApplications()->delete();
                $user->favorites()->delete();
            } elseif ($user->role === 'company') {
                $user->jobListings()->delete();
            }
            
            $user->delete();
            return back()->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus user: ' . $e->getMessage());
        }
    }

    public function deleteCompany($id)
    {
        try {
            $company = User::findOrFail($id);
            
            if ($company->role !== 'company') {
                return back()->with('error', 'Bukan perusahaan!');
            }
            
            // Hapus semua lowongan perusahaan
            $company->jobListings()->delete();
            
            $company->delete();
            return back()->with('success', 'Perusahaan berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus perusahaan: ' . $e->getMessage());
        }
    }

    public function deleteJob($id)
    {
        try {
            $job = JobListing::findOrFail($id);
            
            // Hapus semua aplikasi terkait
            $job->applications()->delete();
            
            $job->delete();
            return back()->with('success', 'Lowongan berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus lowongan: ' . $e->getMessage());
        }
    }
}