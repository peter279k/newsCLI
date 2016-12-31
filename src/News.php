<?php

require_once './vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\EntityBody;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;

class News{

	private $apiKey = '...';
	
	public function getNews(){
	}
	
	public function listSources($category='', $language='', $country=''){
	
		//Executes an http request using guzzle
        $client = new GuzzleHttp\Client([
                    'headers' => ['User-Agent' => 'testing/1.0'],
                    'verify' => false]);

        $response = $client->request("GET", 'https://newsapi.org/v1/sources', ['query' => 'category=' . $category . '&language=' . $language . '&country=' . $country ]);
        $body = $response->getBody()->getContents();

        return $body;
	
	}

}