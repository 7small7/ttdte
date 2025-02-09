<?php
declare(strict_types=1);

namespace verify;

class EncryptClient
{
    //----------------------------------------------------------------------------------
    // 使用password方式加密和解码开始
    //----------------------------------------------------------------------------------
    /**
     * 使用password_hash加密
     * @param string $password
     * @return string
     * @date 2025/1/26 14:33
     */
    public static function hashPasswordEncrypt(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * 使用hashPasswordVerify解密
     * @param string $hashPassword
     * @param string $inputPassword
     * @return bool
     * @date 2025/1/26 14:33
     */
    public static function hashPasswordVerify(string $hashPassword, string $inputPassword): bool
    {
        return password_verify($inputPassword, $hashPassword);
    }
    //----------------------------------------------------------------------------------
    // 使用password方式加密和解码结束
    //----------------------------------------------------------------------------------
}