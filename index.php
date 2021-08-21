<?php

use PhpDebug\Test;

require_once 'vendor/autoload.php';

// exec command composer install using exec
//exec('composer require guzzle/guzzle', $output);

$test = new Test();

// send result var_export in another server via REST
$client = new GuzzleHttp\Client();
$response = $client->request('POST', 'http://127.0.0.1:8080/', [
    'form_params' => [
        'var_export' => var_export($test->test(), true)
    ]
]);







