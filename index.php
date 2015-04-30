<?php

use Del\Palindrome\Tester;

require_once('vendor/autoload.php');

$test = new Tester();

echo $test->isPalindrome('radar') ? 'Yes' : 'No';
echo "\n\n";

echo $test->isPalindrome('reytkstyk') ? 'Yes' : 'No';
echo "\n\n";

echo $test->isPalindrome('radarmumradar') ? 'Yes' : 'No';
echo "\n\n";
