<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');

require_once __DIR__ . '/vendor/autoload.php';
date_default_timezone_set('Asia/Singapore');

// echo 'Helloworld';
use Carbon\Carbon;


printf("Right now is %s", Carbon::now()->toDateTimeString());
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver'));
