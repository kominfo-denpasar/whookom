<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // ambil data pertanyaan dari database
        $dass = DB::table('dass_pertanyaans')->get();
        $no = 1;
        // dd($dass);
        return view('front.survei_dass',  compact('dass', 'no'));
    }
}
