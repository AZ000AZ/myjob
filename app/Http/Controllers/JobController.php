<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // İstatistikler (veritabanından çekilebilir)
        $stats = [
            'total_jobs' => '15,000+',
            'total_companies' => '5,000+',
            'total_users' => '100,000+',
            'successful_matches' => '50,000+',
        ];

        return view('job-search.index', compact('stats'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $city = $request->get('city');
        $type = $request->get('type');

        // Arama mantığı burada olacak
        // Örnek: Job::where('title', 'like', "%{$keyword}%")...

        return redirect()->back()->with('success', 'Arama sonuçları yükleniyor...');
    }
}
