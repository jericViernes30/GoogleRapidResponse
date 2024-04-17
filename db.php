<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$jsonFilePath = __DIR__ . '/rapid-response-53938-firebase-adminsdk-3cxx9-7aafc513e8.json';

$factory = (new Factory)
    ->withServiceAccount($jsonFilePath)
    ->withDatabaseUri('https://rapid-response-53938-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();