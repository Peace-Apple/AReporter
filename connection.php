<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'AReporter_db';

//make the connection
$conn = new MySQLi($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully.";

?>