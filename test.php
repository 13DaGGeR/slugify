<?php
require_once __DIR__ . '/vendor/autoload.php';

use slugify\Slugify;

$try = 'A æ Übérmensch på høyeste nivå! И я люблю PHP! ﬁ';
$result = Slugify::process($try);

echo "$try\n$result\n";
