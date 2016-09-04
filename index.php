<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
    $response = array('message' => "Hello $name!");
    return $app->json($response);
});

$app->get('/fizzbuzz/{number}', function($number) use($app) {

    $min = 1;
    $max = 100;

    if (!is_numeric($number)) {
        $app->abort(400, 'Fizzbuzz number parameter must be numeric');
    }

    if ( ($number < $min) || ($number > $max) ) {
        $app->abort(400, 'Fizzbuzz number parameter must be between 1 and 100');
    }

    $fizz = $number % 3 == 0 ? true : false;
    $buzz = $number % 5 == 0 ? true : false;

    $fizzbuzz = array('number' => $number, 'fizz' => $fizz, 'buzz' => $buzz);

    return $app->json($fizzbuzz);
});

$app->error(function (\Exception $e, Request $request, $code) use($app) {
    $error = array('error' => $e->getMessage());
    return $app->json($error, $code);
});

$app->run();
