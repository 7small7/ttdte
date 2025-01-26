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

class ArrayClient
{
    /**
     * 对数组随机排序
     * @param array $array
     * @return array
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 14:08
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function arrayRand(array $array): array
    {
        if (count($array) === 0) return $array;
        $indexArray = range(0, count($array) - 1);
        shuffle($indexArray);
        $newArray = [];
        foreach ($indexArray as $value) {
            $newArray[] = $array[$value];
        }
        return $newArray;
    }

    /**
     * 根据中文第一个字符a-z进行排序
     * @param array $data
     * @param string $key
     * @return array
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 14:24
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function arrayZhFirstSort(array $data, string $key): array
    {
        function chineseCompare($a, $b)
        {
            global $key;
            $aName = iconv('UTF-8', 'GB2312//IGNORE', $a["$key"]);
            $bName = iconv('UTF-8', 'GB2312//IGNORE', $b["$key"]);
            return strcmp($aName, $bName);
        }

        usort($data, 'chineseCompare');
        return $data;
    }
}