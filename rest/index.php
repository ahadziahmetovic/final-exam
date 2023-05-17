<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

/* TODO middleware method for login */


/* TODO REST API documentation endpoint */


require_once __DIR__.'/routes/ExamRoutes.php';

Flight::start();
?>
