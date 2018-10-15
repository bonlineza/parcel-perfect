<?php

namespace ParcelPerfect;

use SoapClient;

class ParcelPerfectBase
{

    protected $api_url;
    protected $client;
    private $username;
    private $password;
    private $salt;
    public $token;

    public function __construct($config)
    {
        ini_set('soap.wsdl_cache_enabled', 0);
        ini_set('soap.wsdl_cache_ttl', 900);
        ini_set('default_socket_timeout', 15);

        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->client = new SoapClient($config['api_url'], ['trace' => 1]);
        $this->getSalt();
        $this->getToken();
    }

    public function getSalt()
    {
        $params = [
            "email" => $this->username,
        ];

        $result = $this->client->__soapCall("Auth_getSalt", array($params));
        if ($result->errorcode != 0) {
            echo $result->errormessage;
        } else {
            $this->salt = $result->results[0];
            $this->password = md5($this->password . $this->salt->salt);
        }
    }

    public function getToken()
    {
        $params = array(
            "email" => $this->username,
            "password" => $this->password
        );
        $result = $this->client->__soapCall("Auth_getSecureToken", array($params));
        if ($result->errorcode != 0) {
            echo $result->errormessage . "<br>";
        } else {
            $this->token = $result->results[0]->token_id;
        }
    }

    public function __destruct()
    {
        $params = array(
            "token_id" => $this->token
        );
        $this->client->__soapCall("Auth_expireToken", $params);
    }
}