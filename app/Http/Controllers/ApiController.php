<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Bitcoin;

class ApiController extends Controller
{
    protected $crypto;

    public function __construct(Bitcoin $crypto)
    {
    	$this->crypto = $crypto;
    }

    public function index()
    {
    	// Get all the post
    	$cryptos = $this->crypto->all();

    	return view('someview', dd(compact('cryptos')));
    }

    public function show($id)
    {
    	$crypto = $this->crypto->findById($id);

    	return view('someview', compact('crypto'));
    }
}

