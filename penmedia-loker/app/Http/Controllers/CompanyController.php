<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\JobListing;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function showRegister()
    {
        return view('auth.registercompany');
    }

    public function register(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'industry' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->company_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'industry' => $request->industry,
            'password' => Hash::make($request->password),
            'role' => 'company'
        ]);

        Auth::login($user);

        return redirect()->route('company.complete.profile');
    }

    public function dashboard()
    {
        $jobs = JobListing::where('company_id', Auth::id())
                          ->withCount('applications')
                          ->orderBy('created_at', 'desc')
                          ->get();
        
        // Hitung aplikasi yang belum dilihat (unread)
        $unreadApplications = \App\Models\JobApplication::whereHas('jobListing', function($query) {
                $query->where('company_id', Auth::id());
            })
            ->where('is_read', false)
            ->count();
        
        $stats = [
            'total_jobs' => $jobs->count(),
            'active_jobs' => $jobs->where('status', 'active')->count(),
            'total_applicants' => \App\Models\JobApplication::whereHas('jobListing', function($query) {
                $query->where('company_id', Auth::id());
            })->count(),
            'unread_applicants' => $unreadApplications,
            'interviews' => 0
        ];
        
        return view('company.dashboard', compact('jobs', 'stats'));
    }

    public function showCompleteProfile()
    {
        return view('company.complete-profile');
    }

    public function completeProfile(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:500',
            'company_type' => 'required|string',
            'required_majors' => 'required|string|max:255',
            'employee_count' => 'required|string',
            'phone' => 'required|string|max:20',
            'website' => 'nullable|url|max:255',
            'description' => 'required|string|max:1000',
        ]);

        $user = Auth::user();
        $user->update([
            'address' => $request->address,
            'company_type' => $request->company_type,
            'required_majors' => $request->required_majors,
            'employee_count' => $request->employee_count,
            'phone' => $request->phone,
            'website' => $request->website,
            'description' => $request->description,
        ]);

        return redirect()->route('company.dashboard')->with('success', 'Selamat! Profil perusahaan Anda berhasil dilengkapi. Sekarang Anda dapat mulai memposting lowongan kerja dan mencari kandidat terbaik.');
    }

    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job_type' => 'required|string',
            'work_location' => 'required|string',
            'location' => 'required|string|max:255',
            'education_level' => 'required|string',
            'salary_min' => 'required|numeric',
            'salary_max' => 'required|numeric',
            'description' => 'required|string',
            'requirements' => 'required|string',
        ]);

        JobListing::create([
            'company_id' => Auth::id(),
            'title' => $request->title,
            'department' => $request->department,
            'job_type' => $request->job_type,
            'work_location' => $request->work_location,
            'location' => $request->location,
            'education_level' => $request->education_level,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'status' => 'active'
        ]);

        return redirect()->route('company.dashboard')->with('success', 'Lowongan kerja berhasil ditambahkan!');
    }

    public function getApplication($id)
    {
        $application = \App\Models\JobApplication::with(['user', 'jobListing'])
                        ->whereHas('jobListing', function($query) {
                            $query->where('company_id', Auth::id());
                        })
                        ->findOrFail($id);
        
        return response()->json($application);
    }

    public function kandidat()
    {
        // Tandai semua aplikasi sebagai sudah dibaca ketika halaman kandidat dibuka
        \App\Models\JobApplication::whereHas('jobListing', function($query) {
                $query->where('company_id', Auth::id());
            })
            ->where('is_read', false)
            ->update(['is_read' => true]);
        
        $applications = \App\Models\JobApplication::whereHas('jobListing', function($query) {
                            $query->where('company_id', Auth::id());
                        })
                        ->with(['user', 'jobListing'])
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        return view('company.kandidat', compact('applications'));
    }
}