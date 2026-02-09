<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    public function edit()
    {
        return view('company.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_description' => 'nullable|string',
            'company_address' => 'nullable|string|max:255',
            'company_phone' => 'nullable|string|max:20',
            'company_website' => 'nullable|url|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'company_background' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();
        $data = $request->except(['company_logo', 'company_background']);

        if ($request->hasFile('company_logo')) {
            if ($user->company_logo) {
                Storage::disk('public')->delete($user->company_logo);
            }
            $data['company_logo'] = $request->file('company_logo')->store('company/logos', 'public');
        }

        if ($request->hasFile('company_background')) {
            if ($user->company_background) {
                Storage::disk('public')->delete($user->company_background);
            }
            $data['company_background'] = $request->file('company_background')->store('company/backgrounds', 'public');
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Profil perusahaan berhasil diperbarui!');
    }
}
