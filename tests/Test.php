<?php

namespace Nayjest\StrCaseConverter\Test;

use Nayjest\StrCaseConverter\Str;
use PHPUnit_Framework_TestCase;

class Test extends PHPUnit_Framework_TestCase
{
    public function testToCamel()
    {
        self::assertEquals('CamelCase', Str::toCamelCase('camel_case'));
        self::assertEquals('Simple', Str::toCamelCase('simple'));
        self::assertEquals('', Str::toCamelCase(''));
    }

    public function testToSnake()
    {
        self::assertEquals('snake_case', Str::toSnakeCase('SnakeCase'));
        self::assertEquals('snake-case', Str::toSnakeCase('SnakeCase', '-'));
        self::assertEquals('simple', Str::toSnakeCase('Simple'));
        self::assertEquals('', Str::toSnakeCase(''));
    }


}
