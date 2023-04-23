<?php

$host = "localhost";
$user = "root";
$pass = "";
$data = "upload";

$mysqli = new mysqli($host,$user,$pass,$data);


// check connection 
if ($mysqli->connect_errno) {
    echo "Connect failed: " . $mysqli->connect_error;
    exit();
}