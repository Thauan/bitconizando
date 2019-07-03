<?php
namespace App\Util;

use GuzzleHttp\Client;

class Bitcoin
{
	protected $client;
	public $cryptocurrency;

	public function __construct(Client $client)
	{
		$this->client = $client;
		
	}

	public function all()
	{
		$cryptocurrency = "BTC";
		
		return $this->endpointRequest($cryptocurrency.'/trades');
	}

	public function findById($id)
	{
		return $this->endpointRequest('trades/?tid='.$id);
	}

	public function endpointRequest($url)
	{
		try {
			$response = $this->client->request('GET', $url);
		} catch (\Exception $e) {
            return [];
		}

		return $this->response_handler($response->getBody()->getContents());
	}

	public function response_handler($response)
	{
		if ($response) {
			return json_decode($response);
		}
		
		return [];
	}
}