<?php

/** TODO
* Use PDO connection to connect to MySQL Database
*
* update configuration variables used to connect to MySQL database
*
* NOTE: table that contains investors is named investors and table with users is named users
*
* NOTE: If you are having issues with non working routes in flightPHP you have to enable MOD_REWRITE on Apache
*/
$servername = "";
$username = "";
$password = "";
$schema = "final-exam";

$conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
Flight::set("connection", $conn);

/* TODO add swagger documentation for all endpoints in this file */

Flight::route('POST /login', function($transfer){
    /** TODO
    * implement login functionality.
    *
    * Response should contain user and JWT token
    *
    * This endpoint should return output in JSON format
    */
});

Flight::route('GET /investors', function(){
    $stmt = Flight::get('connection')->prepare("SELECT * FROM investors");
    $stmt->execute();
    Flight::json($stmt->fetchAll(PDO::FETCH_ASSOC));
});

Flight::route('GET /investors/@id', function($id){
    $stmt = Flight::get('connection')->prepare("SELECT * FROM investors WHERE id = :id");
    $stmt->execute(['id' => $id]);
    Flight::json($stmt->fetchAll(PDO::FETCH_ASSOC));
});

?>
