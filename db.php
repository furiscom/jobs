<?php

//Your Mysql Config
$servername = "localhost";
$username = "masjid65_wp";
$password = "J4ng4nLup4!!!";
$dbname = "masjid65_jobs";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}