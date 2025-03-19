<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    /**
     * Show the academics index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('academics.index');
    }

    /**
     * Show the early childhood education page.
     *
     * @return \Illuminate\View\View
     */
    public function earlyChildhood()
    {
        return view('academics.early-childhood');
    }

    /**
     * Show the primary education page.
     *
     * @return \Illuminate\View\View
     */
    public function primary()
    {
        return view('academics.primary');
    }

    /**
     * Show the secondary education page.
     *
     * @return \Illuminate\View\View
     */
    public function secondary()
    {
        return view('academics.secondary');
    }

    /**
     * Show the curriculum page.
     *
     * @return \Illuminate\View\View
     */
    public function curriculum()
    {
        return view('academics.curriculum');
    }
}
