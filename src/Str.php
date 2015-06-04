<?php

namespace Nayjest\StrCaseConverter;

class Str
{
    /**
     * Converts string to camel case.
     *
     * @link https://en.wikipedia.org/wiki/CamelCase
     *
     * @param string $str
     * @return string
     */
    public static function toCamelCase($str)
    {
        return str_replace(
            ' ',
            '',
            ucwords(str_replace(array('-', '_'), ' ', $str))
        );
    }

    /**
     * Converts string to snake case.
     *
     * @link https://en.wikipedia.org/wiki/Snake_case
     *
     * @param string $str
     * @param string $delimiter
     * @return string
     */
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
