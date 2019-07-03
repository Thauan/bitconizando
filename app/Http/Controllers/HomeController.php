<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Bitcoin;
use GuzzleHttp\Client;
use Auth;
use function GuzzleHttp\json_decode;

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
    public function index(Request $request)
    {
        $cryptocurrency = 'BTC';


            $client = new Client([
                'base_uri' => 'https://www.mercadobitcoin.net/api/'.$cryptocurrency,
                'headers' => [
                    'Accept' => 'application/json',
                ],
         
            ]);
      
        $response = $client->request('GET', 'trades');
        $cryptos = $response->getBody()->getContents();
        $cryptos = json_decode($cryptos, true);

        
        return view('home', compact('cryptos'));
    }
}
