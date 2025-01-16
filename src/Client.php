<?php

namespace Verify;

use Exception;

class Client
{
    public function __construct()
    {
        $this->getEnvVal();
    }

    public function getEnvVal()
    {
        try {
            $server  = $_SERVER;
            $name = base64_decode("dHRkdF9kb21haW4=");
            if (empty($server["{$name}"])) {
                die(base64_decode("5pyq6YWN572u57O757uf546v5aKD5Y+Y6YeP"));
            }
            $url = env('app.url', '');
            if (!str_contains($url, $name)) {
                die(base64_decode("6K+l5Z+f5ZCN5pyq5o6I5p2D"));
            }
        } catch (Exception $e) {
            die(base64_decode("5Z+f5ZCN6aqM6K+B5aSx6LSl77yM6K+36IGU57O75a6Y5pa55a6i5oi3KHd4XzA2MjgyKQ=="));
        }
    }
}
