<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $featuredJobs = JobListing::with('company')
                                  ->where('status', 'active')
                                  ->latest()
                                  ->take(6)
                                  ->get();
        
        $recentJobs = JobListing::with('company')
                                ->where('status', 'active')
                                ->latest()
                                ->take(8)
                                ->get();
        
        return view('user.dashboard', compact('featuredJobs', 'recentJobs'));
    }

    public function companies()
    {
        $companies = User::where('role', 'company')
                        ->withCount(['jobListings as jobs_count'])
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        return view('user.companies', compact('companies'));
    }

    public function applications()
    {
        $applications = JobApplication::where('user_id', Auth::id())
                                    ->with(['jobListing.company'])
                                    ->orderBy('created_at', 'desc')
                                    ->get();
        
        $stats = [
            'total' => $applications->count(),
            'pending' => $applications->where('status', 'pending')->count(),
            'reviewed' => $applications->where('status', 'reviewed')->count(),
            'accepted' => $applications->where('status', 'accepted')->count(),
            'rejected' => $applications->where('status', 'rejected')->count(),
        ];
        
        return view('user.applications', compact('applications', 'stats'));
    }

    public function careerTips()
    {
        return view('user.career-tips');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'jurusan' => 'nullable|string|max:255',
            'tipe_kerja' => 'nullable|string|in:full_time,part_time,freelance,magang',
            'status_pendidikan' => 'nullable|string|in:kuliah,smk,kerja,lainnya',
            'lokasi_kerja' => 'nullable|string|max:255',
            'keahlian' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'tipe_kerja' => $request->tipe_kerja,
            'status_pendidikan' => $request->status_pendidikan,
            'lokasi_kerja' => $request->lokasi_kerja,
            'keahlian' => $request->keahlian,
        ]);

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui!');
    }

    public function applyJob(Request $request, JobListing $job)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'graduation_year' => 'required|string|max:4',
            'phone' => 'required|string|max:20',
            'cover_letter' => 'required|string|max:2000',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
            'portfolio_url' => 'nullable|url|max:255',
        ]);

        // Check if user already applied
        $existingApplication = JobApplication::where('user_id', Auth::id())
                                           ->where('job_listing_id', $job->id)
                                           ->first();
        
        if ($existingApplication) {
            return back()->with('error', 'Anda sudah melamar untuk posisi ini.');
        }

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        }

        JobApplication::create([
            'user_id' => Auth::id(),
            'job_listing_id' => $job->id,
            'full_name' => $request->full_name,
            'major' => $request->major,
            'graduation_year' => $request->graduation_year,
            'phone' => $request->phone,
            'cover_letter' => $request->cover_letter,
            'cv_path' => $cvPath,
            'portfolio_url' => $request->portfolio_url,
        ]);

        return back()->with('success', 'Lamaran berhasil dikirim!');
    }
}