<?php

namespace ParcelPerfect;

use SoapClient;

class ParcelPerfectBase
{

    const API_URL = "http://adpdemo.pperfect.com/ecomService/v10/Soap/index.php?wsdl";

    protected $client;
    private $username;
    private $password;
    private $salt;
    protected $token;

    public function __construct($username, $password)
    {
        ini_set('soap.wsdl_cache_enabled', 0);
        ini_set('soap.wsdl_cache_ttl', 900);
        ini_set('default_socket_timeout', 15);

        $this->username = $username;
        $this->password = $password;
        $this->client = new SoapClient(self::API_URL);
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