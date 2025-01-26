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

use DateTime;

class DateClient
{
    /**
     * 获取本周的所有日期，从周一开始
     * @param string $formatter
     * @return array
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 13:57
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function currentWeekDateFromFirstMonday(string $formatter = "Y-m-d"): array
    {
        list($year, $month, $day, $hour, $minute, $second) = explode('-', date('Y-n-j-G-i-s'));
        $mondayTimestamp = mktime(0, 0, 0, (int)$month, (int)$day - (int)date('w') + 1, (int)$year);
        $weekDates       = [];
        for ($i = 0; $i < 7; $i++) {
            $weekDates[] = date($formatter, $mondayTimestamp + $i * 24 * 3600);
        }
        return $weekDates;
    }

    /**
     * 获取本周的所有日期，从周日开始
     * @param string $formatter
     * @return array
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 13:57
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function currentWeekDateFromFirstSunday(string $formatter = "Y-m-d"): array
    {
        list($year, $month, $day, $hour, $minute, $second) = explode('-', date('Y-n-j-G-i-s'));
        $mondayTimestamp = mktime(0, 0, 0, (int)$month, (int)$day - (int)date('w') + 1, (int)$year);
        $weekDates       = [];
        for ($i = 0; $i < 7; $i++) {
            $weekDates[] = date($formatter, $mondayTimestamp + $i * 24 * 3600);
        }
        return $weekDates;
    }

    /**
     * 计算两个日期相差的天数
     * @param string $startDate 开始日期
     * @param string $endDate 结束日期
     * @return bool|int
     * @link https://www.tutudati.com
     * @email tutudati@outlook.com
     * @date 2025/1/26 14:05
     * @author 兔兔答题 <tutudati@outlook.com>
     */
    public static function dateDiff(string $startDate, string $endDate): bool|int
    {
        if (strtotime($startDate) > strtotime($endDate)) return false;
        $date1    = new DateTime("2023-01-01");
        $date2    = new DateTime("2023-12-31");
        $interval = $date1->diff($date2);
        return $interval->days;
    }
}