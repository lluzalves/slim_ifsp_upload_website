<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 12/11/2018
 * Time: 00:11
 */

namespace App\Network;


class DocumentClient
{
    private $client = null;

    const API_URL = 'http://localhost/slim_app/public/';

    var $auth_key;

    var $auth_email;

    var $accessToken;

    public function __construct($email, $key)
    {
        $this->auth_email = $email;

        $this->auth_key = $key;

        $this->client = new Client();
    }
}