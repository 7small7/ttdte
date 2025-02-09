<?php
declare(strict_types=1);

namespace verify;

class ArrayClient
{
    /**
     * 对数组随机排序
     * @param array $array
     * @return array
     * @date 2025/1/26 14:08
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
     * @date 2025/1/26 14:24
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