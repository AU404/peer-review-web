<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeerReviewController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes - Peer-Cutie Platform
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes (Guest & Authenticated)
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication Routes (handled by Laravel Breeze/Jetstream)
require __DIR__.'/auth.php';

// Protected Routes (Authenticated Users Only)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::post('/dashboard/{id}/review', [DashboardController::class, 'review'])->name('dashboard.review');
    Route::post('/dashboard/{id}/assign', [DashboardController::class, 'assignReviewer'])->name('dashboard.assign');
    Route::get('/choose', function () {
        return view('choose');
    })->name('choose');
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

    // Beranda AJAX Routes
    Route::get('/task/{id}', [BerandaController::class, 'show']);
    Route::post('/task/{id}/comment', [BerandaController::class, 'comment']);

    // Profile Management Routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Assignment Routes
    Route::prefix('assignments')->name('assignments.')->group(function () {
        Route::get('/', [AssignmentController::class, 'index'])->name('index');
        Route::get('/create', [AssignmentController::class, 'create'])->name('create');
        Route::post('/', [AssignmentController::class, 'store'])->name('store');
        Route::get('/{assignment}', [AssignmentController::class, 'show'])->name('show');
        Route::get('/{assignment}/edit', [AssignmentController::class, 'edit'])->name('edit');
        Route::patch('/{assignment}', [AssignmentController::class, 'update'])->name('update');
        Route::delete('/{assignment}', [AssignmentController::class, 'destroy'])->name('destroy');
        
        // Assignment Review Routes
        Route::post('/{assignment}/review', [AssignmentController::class, 'submitReview'])->name('review');
        Route::get('/{assignment}/reviews', [AssignmentController::class, 'showReviews'])->name('reviews');
    });

    // Peer Review Routes
    Route::prefix('reviews')->name('reviews.')->group(function () {
        Route::get('/', [PeerReviewController::class, 'index'])->name('index');
        Route::get('/pending', [PeerReviewController::class, 'pending'])->name('pending');
        Route::get('/completed', [PeerReviewController::class, 'completed'])->name('completed');
        Route::get('/{review}', [PeerReviewController::class, 'show'])->name('show');
        Route::post('/{review}/submit', [PeerReviewController::class, 'submit'])->name('submit');
        Route::patch('/{review}/update', [PeerReviewController::class, 'update'])->name('update');
    });

    // Notification Routes
    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::patch('/{id}/read', [NotificationController::class, 'markAsRead'])->name('read');
        Route::delete('/{id}', [NotificationController::class, 'destroy'])->name('destroy');
        Route::post('/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('mark-all-read');
    });

    // API Routes for AJAX calls
    Route::prefix('api')->name('api.')->group(function () {
        Route::get('/assignments/{assignment}/reviewers', [AssignmentController::class, 'getReviewers']);
        Route::post('/assignments/{assignment}/assign-reviewer', [DashboardController::class, 'assignReviewer']);
        Route::get('/notifications/unread-count', [NotificationController::class, 'getUnreadCount']);
        Route::post('/reviews/{review}/auto-save', [PeerReviewController::class, 'autoSave']);
        Route::post('/dashboard/{id}/assign', [DashboardController::class, 'assignReviewer'])->name('dashboard.assign');
    });

    // Student/Peer specific routes
    Route::prefix('peer')->name('peer.')->group(function () {
        Route::get('/assignments', [PeerReviewController::class, 'myAssignments'])->name('assignments');
        Route::get('/reviews/given', [PeerReviewController::class, 'reviewsGiven'])->name('reviews.given');
        Route::get('/reviews/received', [PeerReviewController::class, 'reviewsReceived'])->name('reviews.received');
        Route::get('/statistics', [PeerReviewController::class, 'statistics'])->name('statistics');
    });

    // File Upload/Download Routes
    Route::prefix('files')->name('files.')->group(function () {
        Route::post('/upload', function () {
            // Handle file upload logic
            return response()->json(['success' => true]);
        })->name('upload');
        
        Route::get('/download/{file}', function ($file) {
            // Handle file download logic
            return response()->download(storage_path('app/assignments/' . $file));
        })->name('download');
    });
});

// Admin Routes
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');
    
    Route::get('/assignments', function () {
        return view('admin.assignments');
    })->name('assignments');
    
    Route::get('/reviews', function () {
        return view('admin.reviews');
    })->name('reviews');
});

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});