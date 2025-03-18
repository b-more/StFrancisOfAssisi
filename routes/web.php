<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UssdSessionController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// In routes/web.php

// Protect routes with role middleware
Route::middleware(['role:admin'])->group(function () {
    // Only users with admin role can access these routes
});

// Protect routes with permission middleware
Route::middleware(['permission:edit members'])->group(function () {
    // Only users with 'edit members' permission can access these routes
});

// Protect routes with role OR permission middleware
Route::middleware(['role_or_permission:admin|edit members'])->group(function () {
    // Users with either admin role OR edit members permission can access these routes

});

// Academic pages
Route::get('/academics', [AcademicsController::class, 'index'])->name('academics');
Route::get('/academics/early-childhood', [AcademicsController::class, 'earlyChildhood'])->name('academics.early-childhood');
Route::get('/academics/primary', [AcademicsController::class, 'primary'])->name('academics.primary');
Route::get('/academics/secondary', [AcademicsController::class, 'secondary'])->name('academics.secondary');
Route::get('/academics/curriculum', [AcademicsController::class, 'curriculum'])->name('academics.curriculum');


// Admissions pages
Route::get('/admissions', [AdmissionsController::class, 'index'])->name('admissions');
Route::get('/admissions/requirements', [AdmissionsController::class, 'requirements'])->name('admissions.requirements');
Route::get('/admissions/fees', [AdmissionsController::class, 'fees'])->name('admissions.fees');
Route::get('/admissions/apply', [AdmissionsController::class, 'apply'])->name('admissions.apply');
Route::post('/admissions/submit', [AdmissionsController::class, 'submit'])->name('admissions.submit');

// Student Life
Route::get('/student-life', [StudentLifeController::class, 'index'])->name('student-life');
Route::get('/student-life/sports', [StudentLifeController::class, 'sports'])->name('student-life.sports');
Route::get('/student-life/clubs', [StudentLifeController::class, 'clubs'])->name('student-life.clubs');
Route::get('/student-life/events', [StudentLifeController::class, 'events'])->name('student-life.events');

// News & Events
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/events', [EventsController::class, 'index'])->name('events');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');

// Contact routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Gallery route
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
// Student/Parent Portal routes
Route::get('/portal', [ParentPortalController::class, 'index'])->name('portal');
Route::post('/portal/login', [ParentPortalController::class, 'login'])->name('portal.login');

// Admin middleware group
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Student management
    Route::resource('students', StudentController::class);

    // Fee management
    Route::resource('fees', FeeController::class);

    // Employee management
    Route::resource('employees', EmployeeController::class);

    // Payroll management
    Route::resource('payrolls', PayrollController::class);

    // Homework management
    Route::resource('homeworks', HomeworkController::class);

    // Results management
    Route::resource('results', ResultController::class);
});

// Parent/Student middleware group
Route::middleware(['auth', 'role:parent,student'])->prefix('portal')->group(function () {
    // Dashboard
    Route::get('/dashboard', [ParentPortalController::class, 'dashboard'])->name('portal.dashboard');

    // View student details
    Route::get('/student/{id}', [ParentPortalController::class, 'studentDetails'])->name('portal.student');

    // View fees
    Route::get('/fees', [ParentPortalController::class, 'fees'])->name('portal.fees');

    // View homeworks
    Route::get('/homeworks', [ParentPortalController::class, 'homeworks'])->name('portal.homeworks');

    // View results
    Route::get('/results', [ParentPortalController::class, 'results'])->name('portal.results');
});



Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/about', function () {
    return view('about');
})->name('about');  // This adds the name to the route

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/archive', [ServiceController::class, 'archive'])->name('services.archive');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Route::post('/ussd/callback', [UssdSessionController::class, 'ussd'])
//     ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])
//     ->name('ussd.callback');
// Route::get('/ussd/status', function () {
//     return response()->json([
//         'status' => 'active',
//         'message' => 'USSD service is running'
//     ]);
// });

Route::post('/contact', [GetInTouchController::class, 'store'])->name('contact.submit');


Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


