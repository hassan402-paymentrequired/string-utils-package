<?php

use Hassan\FirstPackage\StringUtils;

require_once __DIR__ . '/../vendor/autoload.php';



$word = 'hello world man';

$response = StringUtils::getPosition($word, '');

print_r( $response);
