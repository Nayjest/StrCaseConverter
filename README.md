# nayjest/str-case-converter

[![Latest Stable Version](https://poser.pugx.org/nayjest/str-case-converter/v/stable.svg)](https://packagist.org/packages/nayjest/str-case-converter)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Nayjest/StrCaseConverter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Nayjest/StrCaseConverter/?branch=master)
[![Build Status](https://travis-ci.org/Nayjest/StrCaseConverter.svg?branch=master)](https://travis-ci.org/Nayjest/StrCaseConverter)
[![Code Coverage](https://scrutinizer-ci.com/g/Nayjest/StrCaseConverter/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Nayjest/StrCaseConverter/?branch=master)

Library for converting strings from camel case to snake case and vice versa.

## Installation

The recommended way of installing the library is through [Composer](https://getcomposer.org).

Run following command:

```bash
composer require nayjest/str-case-converter
```

## Usage

### Converting snake case to camel case

```php
use Nayjest\StrCaseConverter\Str;
...
echo Str::toCamelCase('my-string'); // 'MyString'
echo Str::toCamelCase('one_more_string'); // 'OneMoreString'
```
Source string may be separated to words using following characters: '-', '_' and space.

### Converting camel case to snake case

```php
use Nayjest\StrCaseConverter\Str;
...
echo Str::toSnakeCase('MyString'); // 'my_string'

// It's possible to use custom delimiter:
echo Str::toSnakeCase('OneMoreString', '-'); // 'one-more-string'
```


## Testing

Run following command:

```bash
phpunit
```

## License

© 2015—2018 Vitalii Stepanenko

Licensed under the MIT License.

Please see [License File](LICENSE) for more information.
