<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:users,id'
        ]);

        $userId = Auth::id();
        $companyId = $request->company_id;

        $favorite = Favorite::where('user_id', $userId)
                           ->where('company_id', $companyId)
                           ->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json(['favorited' => false]);
        } else {
            Favorite::create([
                'user_id' => $userId,
                'company_id' => $companyId
            ]);
            return response()->json(['favorited' => true]);
        }
    }

    public function check(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:users,id'
        ]);

        $userId = Auth::id();
        $companyId = $request->company_id;

        $favorited = Favorite::where('user_id', $userId)
                            ->where('company_id', $companyId)
                            ->exists();

        return response()->json(['favorited' => $favorited]);
    }
}