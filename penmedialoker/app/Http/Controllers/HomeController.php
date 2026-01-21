<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil beberapa lowongan terbaru atau featured
        $featuredJobs = Job::latest()->take(6)->get();
        $totalJobs = Job::count();
        $categories = Job::distinct('category')->pluck('category');

        return view('home', compact('featuredJobs', 'totalJobs', 'categories'));
    }
}