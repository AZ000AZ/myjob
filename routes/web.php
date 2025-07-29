<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/search', [JobController::class, 'search'])->name('jobs.search');

Route::get('/services', function () {
    return view('services.index');
})->name('services.index');

// API Routes for AJAX calls
Route::prefix('api')->group(function () {
    Route::get('/status', function () {
        return response()->json([
            'status' => 'online',
            'timestamp' => now()->toISOString(),
            'server' => 'Laravel ' . app()->version(),
            'features' => [
                'servicesPage' => true,
                'searchFilters' => true,
                'favoriteSystem' => true,
                'categoryFilters' => true,
                'responsiveDesign' => true,
            ],
        ]);
    });

    Route::post('/services/favorite', function () {
        // Handle service favorite toggle
        return response()->json(['success' => true]);
    });
});


// Jobs
Route::view('/jobs', 'jobs.index')->name('jobs.index');

// Companies
Route::view('/companies', 'companies.index')->name('companies.index');

// Guide
Route::view('/guide', 'guide.index')->name('guide.index');

// Contact
Route::view('/contact', 'contact.index')->name('contact.index');
