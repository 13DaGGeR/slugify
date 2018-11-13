# Slugify
String to slug converter with both cyrillic and european languages support. Requires iconv, uses intl if possible.

## Installation
```bash
composer require 13dagger/slugify
```

## Usage
```php
require_once __DIR__ . '/vendor/autoload.php';
use slugify\Slugify;
$try = 'A æ Übérmensch på høyeste nivå! И я люблю PHP! ﬁ';
$result = Slugify::process($try);
echo "$try\n$result\n";
```
output:
```
A æ Übérmensch på høyeste nivå! И я люблю PHP! ﬁ
a-ae-ubermensch-pa-hoyeste-niva-i-a-lublu-php-fi
```
