# Palindrome Code Kata
[![Build Status](https://travis-ci.org/delboy1978uk/palindrome.png?branch=master)](https://travis-ci.org/delboy1978uk/palindrome) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/palindrome/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/palindrome/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/palindrome/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/palindrome/?branch=master) <br />

Installation via Packagist
--------------------------
```
composer create-project delboy1978uk/palindrome --stability=dev
```
Running from a Browser
----------------------
index.php has a text field and submit button which calls the palindrome API.
Running the CLI command
-----------------------
The palindrome command is in the bin directory. You can add several words.
```
./palindrome radar failingword kayak dad mum etc 
```
The kata command is also in the bin directory. This accepts input and produces output to the code kata spec.
Type in the following comand and follow the instructions
```
./kata
```
Calling the API
---------------
```
api.php?query=radar
```
Testing with Codeception
------------------------
```
vendor/bin/codecept run unit --coverage-html
```
Travis
------
Tests are being run on PHP 5.4, 5.5, 5.6, and HHVM
Scrutinizer
-----------
Scrutinizer inspects code for bad smells etc.
Coverage clovers are uploaded from the Travis builds to Scrutinizer.
See status icons above.
