<?php

require_once('utils.php');
require_once('connection.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Success... ' . $mysqli->host_info . "<br />";

$query = "SELECT * FROM TBL_SHORTENER";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_array()) {
        foreach ($row as $key => $value) {
        	echo "$key : $value<br />";
        }
    }

    /* free result set */
    $result->free();
}



echo ShortenerType::Link;
echo ShortenerType::File;


$mysqli->close();


//Function get 1 row

//function get all rows

//funciton put 1 row




?>