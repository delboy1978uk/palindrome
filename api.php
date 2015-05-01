<?php

    ini_set('display_errors',0);

    require_once('vendor/autoload.php');

    use Del\Palindrome\Tester;

    $string = filter_var($_GET['query'], FILTER_SANITIZE_STRING);

    if(empty($string))
    {
        header('Content-Type: application/json',true,400);
        echo json_encode(array(
            'query' => null,
            'result' => 'error'
        ));
        exit;
    }

    $test = new Tester();
    $result = $test->isPalindrome($string);

    header('Content-Type: application/json');
    echo json_encode(array(
        'query' => $string,
        'result' => $result
    ));

