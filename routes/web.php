<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Notifications\AssignmentAssigned;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::post('/dashboard/{id}/review', [DashboardController::class, 'review'])->name('dashboard.review')->middleware('auth');
    Route::post('/dashboard/{id}/assign', [DashboardController::class, 'assignReviewer'])->name('dashboard.assign')->middleware('auth');
    Route::patch('/notification/{id}/read', function ($id) {
    auth()->user()->unreadNotifications()->findOrFail($id)->markAsRead();
    return redirect()->back();
    })->name('notification.read')->middleware('auth');
});

require __DIR__.'/auth.php';