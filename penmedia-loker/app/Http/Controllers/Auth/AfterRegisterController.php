<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AfterRegisterController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        
        if (!$user) {
            return redirect()->route('login');
        }
        
        // Redirect ke complete profile jika profil belum lengkap
        if (!$user->status_pendidikan) {
            return redirect()->route('complete.profile');
        }
        
        return view('auth.after-register', compact('user'));
    }

    public function showCompleteProfile()
    {
        return view('auth.complete-profile');
    }

    public function completeProfile(Request $request)
    {
        $request->validate([
            'status_pendidikan' => 'required|string|in:kuliah,smk,kerja,lainnya',
            'jurusan' => 'required|string|max:255',
            'tipe_kerja' => 'required|string|in:full_time,part_time,freelance,magang',
            'lokasi_kerja' => 'required|string|max:255',
            'keahlian' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();
        $user->update([
            'status_pendidikan' => $request->status_pendidikan,
            'jurusan' => $request->jurusan,
            'tipe_kerja' => $request->tipe_kerja,
            'lokasi_kerja' => $request->lokasi_kerja,
            'keahlian' => $request->keahlian,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Selamat! Profil Anda berhasil dilengkapi. Sekarang Anda dapat menjelajahi lowongan kerja yang sesuai dengan preferensi Anda.');
    }
}