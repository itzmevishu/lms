<?php
/**
 * Created by PhpStorm.
 * User: vkalappagari
 * Date: 3/12/2018
 * Time: 8:11 PM
 */

namespace App\Classes;
use GuzzleHttp;
use GuzzleHttp\Exception\GuzzleException;

class Litmos
{
    /*
     * Initiate Guzzle
     */
    private $http_client;
    private $base_url;
    private $query = array();
    public function __construct()
    {
        $this->base_url = 'https://api.litmos.com/v1.svc/';
        $this->http_client = new GuzzleHttp\Client(['base_uri'=>$this->base_url]);
        $this->query = [
            'apikey' => env('LITMOS_KEY'),
            'source'=> env('LITMOS_SOURCE')
        ];

    }

    public function getCourses(){

        $res  =  $this->http_client->request('GET','courses',
            [
                'query'   => $this->query,
                'body' => '',
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => false
            ]);
        if($res->getStatusCode() == 200) {
            return json_decode($res->getBody());
        } else {
            return false;
        }
    }
}