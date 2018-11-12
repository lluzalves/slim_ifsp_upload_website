<?php

namespace App\Controller;

class HomeController
{
    public function index($request, $response, $args)
    {
        $client = new GuzzleHttp\Client();

        $res = $client->request(‘GET’, 'https://api.cloudways.com/api/v1', [

            ‘headers’ => [

                ‘Accept’ => ‘application / json’,

                ‘Content - type’ => ‘application / json’
            ]]);
        return 'HomeController';
    }

    public function login($request, $response, $args)
    {
        return 'login';
    }

    public function logout($request, $response, $args)
    {
        return 'logout';
    }

    public function register($request, $response, $args)
    {
        return 'register';
    }
}