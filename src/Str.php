<?php

namespace Nayjest\StrCaseConverter;

class Str
{
    public static function toCamelCase($str)
    {
        return str_replace(
            ' ',
            '',
            ucwords(str_replace(array('-', '_'), ' ', $str))
        );
    }

    public static function toSnakeCase($str, $delimiter = '_')
    {
        $str = lcfirst($str);
        $lowerCase = strtolower($str);
        $result = '';
        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $result .= ($str[$i] === $lowerCase[$i] ? '' : $delimiter) . $lowerCase[$i];
        }
        return $result;
    }
}
