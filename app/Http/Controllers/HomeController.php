<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Bitcoin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $crypto;

    public function __construct(Bitcoin $crypto)
    {
        $this->crypto = $crypto;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all the post
    	$cryptos = $this->crypto->all();

        return view('home', compact('cryptos'));
    }
}
