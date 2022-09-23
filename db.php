<?php
//Lets you connect to the database named u_200085016_db"
$con = mysqli_connect("localhost", "u-200085016", "t3e78ZoQYZT8OVQ", "u_200085016_db");
//$con = mysqli_connect("localhost","root","","aston_events");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . $mysqli_connect_error();
}
