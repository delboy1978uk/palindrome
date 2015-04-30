<?php

use Del\Palindrome\Tester;

require_once('vendor/autoload.php');

$test = new Tester();

echo $test->isPalindrome('radar') ? 'Yes' : 'No'; 
