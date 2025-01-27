<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }

    /**
     * Halaman intro survei.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function survei()
    {
        return view('front.survei');
    }

    /**
     * Halaman survei DASS-21.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function surveiDass()
    {
        return view('front.survei_dass');
    }
}
