<?php 

/* connection database of your running mysql server
(with 'root' no password)*/

define ('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','curdlaravel');


//connect mysql database

$mysqli= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//connection check
if($mysqli == false)
{
    die("ERROR: Database not connect.".$mysqli->connect_error);
}

?>