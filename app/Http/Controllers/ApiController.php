<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Bitcoin;
use GuzzleHttp\Client;

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
        //$cryptos = $this->crypto->all();
        $client = new Client;
        $response = $client->get('https://www.mercadobitcoin.net/api/BTC/trades/');
        $cryptos = $response->getBody()->getContents();
        $cryptos = json_decode($cryptos, true);

        //dd($json);

    	return view('someview', dd(compact('cryptos')));
    }

    public function show($id)
    {
    	$crypto = $this->crypto->findById($id);

    	return view('someview', compact('crypto'));
    }
}

