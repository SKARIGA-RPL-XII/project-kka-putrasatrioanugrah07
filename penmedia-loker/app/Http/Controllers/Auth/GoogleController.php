<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            $user = User::where('email', $googleUser->email)->first();
            
            if ($user) {
                // Update google_id jika belum ada
                if (!$user->google_id) {
                    $user->update(['google_id' => $googleUser->id]);
                }
                
                Auth::login($user);
                return redirect()->intended($this->getRedirectPath($user->role));
            }
            
            // Jika user belum terdaftar, redirect ke register dengan data Google
            return redirect()->route('register')
                ->with('google_data', [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                ])
                ->with('error', 'Email belum terdaftar. Silakan daftar terlebih dahulu.');
            
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Login dengan Google gagal: ' . $e->getMessage());
        }
    }

    private function getRedirectPath($role)
    {
        return match($role) {
            'admin' => route('admin.dashboard'),
            'company' => route('company.dashboard'),
            default => route('user.dashboard'),
        };
    }
}
