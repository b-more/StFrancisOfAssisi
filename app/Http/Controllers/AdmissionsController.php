<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionNotification;
use Illuminate\Http\Request;

class AdmissionsController extends Controller
{
    /**
     * Display the main admissions page.
     */
    public function index()
    {
        return view('admissions.index');
    }

    /**
     * Display the admissions requirements page.
     */
    public function requirements()
    {
        return view('admissions.requirements');
    }

    /**
     * Display the fee structure page.
     */
    public function fees()
    {
        return view('admissions.fees');
    }

    /**
     * Display the application form page.
     */
    public function apply()
    {
        return view('admissions.apply');
    }

    /**
     * Process the application form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'grade_applying_for' => 'required|string|max:50',
            'parent_name' => 'required|string|max:255',
            'parent_email' => 'required|email|max:255',
            'parent_phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'previous_school' => 'nullable|string|max:255',
        ]);

        // Application data is not yet persisted to a Student/Application model;
        // the notification email is the canonical record until that storage is wired up.
        FormSubmissionNotification::dispatchToAdmin('admissions', $validated);

        return redirect()->route('admissions.apply')
            ->with('success', 'Your application has been submitted successfully. We will contact you shortly.');
    }
}
