<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UssdSessionController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\StudentLifeController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\NoticesController;

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
// NewsController is an empty stub in the original repo — routes disabled until the controller is implemented.
// Route::get('/news', [NewsController::class, 'index'])->name('news');
// Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::redirect('/news', '/notices')->name('news');    // until news is built, point at notices
Route::redirect('/news/{slug}', '/notices/{slug}');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');

// Contact routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Gallery route
Route::get('/gallery/category/{category}', [GalleryController::class, 'category'])->name('gallery.category');
Route::get('/gallery/photo/{id}', [GalleryController::class, 'photo'])->name('gallery.photo');
Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Events routes
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
// /events/calendar, /category/{cat}, /{slug} reference empty Blade stubs in the source repo.
// Redirect them to working pages until the views are written. Keep the route names so
// route() lookups in views still resolve.
Route::redirect('/events/calendar', '/calendar')->name('events.calendar');
Route::redirect('/events/category/{category}', '/events')->name('events.category');
Route::get('/events/{slug}', function () { return redirect('/events'); })->name('events.show');

// Portal + Admin route groups disabled — they reference 7 empty controller stubs
// (AdminController, StudentController, FeeController, EmployeeController, PayrollController,
//  HomeworkController, ResultController, ParentPortalController) that don't have any code
// in the source repo. Real portal/admin lives in the school-portal Laravel app at /admin.
Route::redirect('/portal', '/admin/login')->name('portal');

// Parents page (added with the new content rollout)
Route::get('/parents', fn() => view('parents'))->name('parents');

// Parent App download + install + usage page
Route::get('/parent-app', fn() => view('parent-app'))->name('parent-app');

// Careers page (added with the new content rollout)
Route::get('/careers', fn() => view('careers'))->name('careers');

// Privacy Policy (footer link)
Route::get('/privacy', fn() => view('privacy'))->name('privacy');



Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
// NewsletterController is an empty stub — accept the email as a get_in_touches row tagged 'newsletter'
// until a proper newsletter system is wired up.
Route::post('/newsletter', function (\Illuminate\Http\Request $request) {
    $email = $request->input('email');
    if ($email) {
        try {
            \DB::table('get_in_touches')->insert([
                'name'         => 'Newsletter subscriber',
                'email'        => $email,
                'phone'        => null,
                'message'      => 'Newsletter subscription request from website footer.',
                'inquiry_type' => 'newsletter',
                'status'       => 'new',
                'is_read'      => false,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        } catch (\Throwable $e) { /* ignore — keep UX smooth */ }

        \App\Mail\FormSubmissionNotification::dispatchToAdmin('newsletter', [
            'email' => $email,
        ]);
    }
    return back()->with('success', 'Thanks — you are subscribed.');
})->name('newsletter.subscribe');
Route::get('/about', function () {
    return view('about');
})->name('about');  // This adds the name to the route

// /services view expects a $services collection; just hand it an empty one until the model is built.
Route::get('/services', function () {
    return view('services', ['services' => collect()]);
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// /services keeps the simple closure above; ServiceController routes disabled — App\Models\Service was never created.
// Route::get('/services', [ServiceController::class, 'index'])->name('services');
// Route::get('/services/archive', [ServiceController::class, 'archive'])->name('services.archive');
// Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Stub names for views that reference route('gallery') and route('club.register') — both go to existing routes/pages.
Route::redirect('/_alias/gallery', '/gallery')->name('gallery');
Route::redirect('/_alias/club-register', '/contact')->name('club.register');

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


//Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


// Add these calendar routes to your web.php file
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::get('/calendar/download', [CalendarController::class, 'download'])->name('calendar.download');


Route::prefix('notices')->name('notices.')->group(function () {
    Route::get('/', [NoticesController::class, 'index'])->name('index');
    Route::get('/term-two-bulletin', [NoticesController::class, 'termTwoBulletin'])->name('term-two-bulletin');
    Route::get('/term-two-bulletin/download', [NoticesController::class, 'downloadTermTwoBulletin'])->name('download.term-two-bulletin');
    Route::get('/{slug}', [NoticesController::class, 'show'])->name('show');
});
