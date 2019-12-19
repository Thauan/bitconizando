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
        // $cryptocurrency = 'BTC';
        // $key = '';

        //     $client = new Client([
        //         'base_uri' => 'https://rest-sandbox.coinapi.io/v1/',
        //         'headers' => [
        //             'Accept' => 'application/json',
        //             'X-CoinAPI-Key' => $key,
        //         ],
        //     ]);

        // $response = $client->request('GET', 'exchanges');
        // $cryptos = $response->getBody()->getContents();
        // $cryptos = json_decode($cryptos, true);

        // dd($cryptos);

        return view('home', compact('cryptos'));
    }
}
