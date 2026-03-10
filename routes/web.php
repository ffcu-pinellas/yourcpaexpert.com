<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Admin\TwoFactorController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/wizard', [ServicesController::class, 'wizard'])->name('services.wizard');
Route::get('/services/{slug}', [ServicesController::class, 'show'])->name('services.show');

Route::get('/about', function () {
    return view('about'); // To be implemented
});

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// Installation Routes
Route::get('/setup', [\App\Http\Controllers\SetupController::class, 'index'])->name('setup.index');
Route::post('/setup', [\App\Http\Controllers\SetupController::class, 'install'])->name('setup.install');

// Client Portal Routes (Placeholder for Auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\ClientController::class, 'index'])->name('dashboard');
    Route::post('/documents/upload', [\App\Http\Controllers\DocumentController::class, 'upload'])->name('documents.upload');
    Route::get('/documents/{document}/download', [\App\Http\Controllers\DocumentController::class, 'download'])->name('documents.download');
});

// Admin Routes (Placeholder for Auth Middleware)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/2fa/setup', [TwoFactorController::class, 'setup'])->name('2fa.setup');
    Route::post('/2fa/confirm', [TwoFactorController::class, 'confirm'])->name('2fa.confirm');
    
    Route::middleware('app.admin_2fa')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/seed', [DashboardController::class, 'seed'])->name('seed');
        Route::get('/findlaw-portal', [DashboardController::class, 'findlawPortal'])->name('findlaw-portal');
    Route::post('/findlaw-portal/sync', [DashboardController::class, 'syncFindlaw'])->name('findlaw-portal.sync');
    Route::resource('pages', PageController::class);
        Route::resource('team', TeamMemberController::class);
        Route::resource('cases', \App\Http\Controllers\Admin\JobCaseController::class);
        Route::resource('payments', \App\Http\Controllers\Admin\PaymentMethodController::class);
        Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
    });
});
