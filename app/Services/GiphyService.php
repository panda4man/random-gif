<?php

namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class GiphyService
{
    private $client;
    private $baseUrl = 'https://api.giphy.com';
    private $apiKey = '';

    public function __construct()
    {
        $this->client = new Client;
        $this->apiKey = config('services.giphy.key');
    }

    /**
     * @param string $search
     * @param string $rating
     * @return array
     */
    public function random($search = '', $rating = '')
    {
        $url = $this->baseUrl . '/v1/gifs/random';
        $params = [
            'api_key' => $this->apiKey,
            'rating' => 'g',
        ];

        if(func_num_args() == 1) {
            if($search)
                $params['tag'] = $search;
        } else if(func_num_args() == 2) {
            if($search)
                $params['tag'] = $search;

            if($rating)
                $params['rating'] = $rating;
        }

        return $this->getRequest($url, $params);
    }

    /**
     * @param $url
     * @param $params
     * @return array
     */
    private function getRequest($url, $params)
    {
        try {
            $res = $this->client->get($url, [
                'query' => $params,
            ]);
            $data = json_decode($res->getBody(), true);

            return ['success' => true, 'data' => $data];
        } catch (BadResponseException $e) {
            $res = $e->getResponse()->getBody();

            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}