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

class EncryptClient
{
    //----------------------------------------------------------------------------------
    // 使用password方式加密和解码开始
    //----------------------------------------------------------------------------------
    /**
     * 使用password_hash加密
     * @param string $password
     * @return string
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 14:33
     * @author 兔兔答题 <tutudati@outlook.com>
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
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 14:33
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function hashPasswordVerify(string $hashPassword, string $inputPassword): bool
    {
        return password_verify($inputPassword, $hashPassword);
    }
    //----------------------------------------------------------------------------------
    // 使用password方式加密和解码结束
    //----------------------------------------------------------------------------------
}