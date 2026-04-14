<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }
            
            if (Auth::user()->role === 'company') {
                return redirect()->route('company.dashboard');
            }
            
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        Auth::login($user);

        return redirect()->route('complete.profile');
    }

    public function showProfile()
    {
        return view('user.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'jurusan' => 'nullable|string|max:255',
            'tipe_kerja' => 'nullable|in:full_time,part_time,freelance,magang',
            'status_pendidikan' => 'nullable|in:kuliah,smk,kerja,lainnya',
            'lokasi_kerja' => 'nullable|string|max:255',
            'keahlian' => 'nullable|string',
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
            'profile_completed' => true,
        ]);

        // Redirect ke dashboard jika dari afterregisuser, ke profil jika dari halaman profil
        if ($request->has('from_register')) {
            return redirect()->route('user.dashboard')->with('success', 'Profil berhasil dilengkapi!');
        }
        
        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function logout(Request $request)
    {
        $role = Auth::user() ? Auth::user()->role : null;
        
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Redirect berdasarkan role sebelumnya
        if ($role === 'admin') {
            return redirect()->route('admin.login')->with('success', 'Berhasil logout');
        } elseif ($role === 'company') {
            return redirect()->route('login')->with('success', 'Berhasil logout');
        }
        
        return redirect()->route('user.dashboard')->with('success', 'Berhasil logout');
    }
}