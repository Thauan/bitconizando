<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Bitcoin;
use App\User;
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
        $token = Auth()->user()->api_token;

        dd($headers = [
            'Authorization' => 'Bearer ' .$token,  
            'Content-Type' => 'application/json',      
            'Accept'        => 'application/json',
        ]);

    	// Get all the post
        $client = new Client;
        $response = $client->get('https://www.mercadobitcoin.net/api/BTC/trades/', [
        'headers' => $headers
        ]);

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

