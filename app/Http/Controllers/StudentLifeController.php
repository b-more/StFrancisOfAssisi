<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLifeController extends Controller
{
    /**
     * Display the student life index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('student-life.index');
    }

    /**
     * Display the sports programs page.
     *
     * @return \Illuminate\View\View
     */
    public function sports()
    {
        return view('student-life.sports');
    }

    /**
     * Display the clubs and activities page.
     *
     * @return \Illuminate\View\View
     */
    public function clubs()
    {
        return view('student-life.clubs');
    }

    /**
     * Display the arts and culture page.
     *
     * @return \Illuminate\View\View
     */
    public function arts()
    {
        return view('student-life.arts');
    }

    /**
     * Display the leadership and service page.
     *
     * @return \Illuminate\View\View
     */
    public function leadership()
    {
        return view('student-life.leadership');
    }

    /**
     * Display the field trips and excursions page.
     *
     * @return \Illuminate\View\View
     */
    public function fieldTrips()
    {
        return view('student-life.field-trips');
    }

    /**
     * Display the school events page.
     *
     * @return \Illuminate\View\View
     */
    public function events()
    {
        return view('student-life.events');
    }

    /**
     * Display the house system page.
     *
     * @return \Illuminate\View\View
     */
    public function houses()
    {
        return view('student-life.houses');
    }
}
