<?php
declare(strict_types=1);
// +----------------------------------------------------------------------
// | 兔兔答题考试系统
// +----------------------------------------------------------------------
// | 感谢使用兔兔答题系统
// | 本系统经过商业授权，不能转售、开源等其他不符合兔兔答题系统版权协议外的商业行为，违者必追究其侵犯版权行为。
// | 访问官网：https://www.tutudati.com
// | 官方邮箱：tutudati@outlook.com
// | 兔兔答题系统开发者版权所有，拥有最终解释权。
namespace verify;

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
            $server = $_SERVER;
            $name   = base64_decode("TElDRU5TRV9ET01BSU4=");
            if (empty($server["{$name}"])) {
                die(base64_decode("5pyq6YWN572u57O757uf546v5aKD5Y+Y6YeP"));
            }
            $name2 = base64_decode("YXBwX2hvc3Q=");
            $parse = parse_url($server["$name2"]);
            if (!isset($parse["host"])) {
                die(base64_decode("6K+l5Z+f5ZCN5pyq5o6I5p2D"));
            }
            $hostArray = explode(".", $parse["host"]);
            $hostStr   = $hostArray[count($hostArray) - 2] . "." . $hostArray[count($hostArray) - 1];
            if ($hostStr !== $server["{$name}"]) {
                die(base64_decode("6K+l5Z+f5ZCN5pyq5o6I5p2D"));
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
            die(base64_decode("5Z+f5ZCN6aqM6K+B5aSx6LSl77yM6K+36IGU57O75a6Y5pa55a6i5oi3KHd4XzA2MjgyKQ=="));
        }
    }
}
