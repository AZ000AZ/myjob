<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobListingController;

Route::get('/', [JobController::class, 'index'])->name('home');

// Jobs sayfası (Vue için Blade view)
Route::get('/jobs', function () {
    return view('jobs.index');
})->name('jobs.index');

// Jobs JSON datası
Route::get('/jobs-data', [JobListingController::class, 'index']);


Route::view('/about-contact', 'about-contact.index')->name('about-contact');


// API status
Route::prefix('api')->group(function () {
    Route::get('/status', function () {
        return response()->json([
            'status' => 'online',
            'timestamp' => now()->toISOString(),
            'server' => 'Laravel ' . app()->version(),
        ]);
    });
});

Route::view('/', 'home.index')->name('home');
Route::view('/jobs', 'jobs.index')->name('jobs.index');
Route::view('/companies', 'companies.index')->name('companies.index');
