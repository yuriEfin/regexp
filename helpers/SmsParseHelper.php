<?php


namespace app\helpers;


class SmsParserHelper
{
    public static function parse($str)
    {
        if (preg_match_all('/(\d{1,4}[\,\р\.](\d{1,}))|(\d{1,15})/umi', $str, $matches)) {
            return $matches[0];
        }

        return [];
    }
}
