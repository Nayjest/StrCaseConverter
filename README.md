# nayjest/str-case-converter

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
echo Str::toCamelCase('OneMoreString', '-'); // 'one-more-string'
```


## Testing

Run following command:

```bash
phpunit
```

## License

© 2015 Vitalii Stepanenko

Licensed under the MIT License.

Please see [License File](LICENSE) for more information.
