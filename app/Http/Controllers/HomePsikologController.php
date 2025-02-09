<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePsikologController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('backend/home_psikolog');
	}

	/**
     * Tampilkan detail data konseling. 
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function konseling($id)
    {
        return view('backend/konseling');
    }
}
