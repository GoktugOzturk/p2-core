<?php
namespace Paranoia\Helper\Formatter\Formatter;

use Paranoia\Helper\Formatter\FormatterInterface;

class ConcatenatedDate implements FormatterInterface
{
    /**
     * @param integer $month
     * @param integer $year
     * @return string
     */
    public static function format($month, $year)
    {
        return sprintf('%02s%s', $month, substr($year, -2));
    }
}
