<?php
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'AReporter_db';

//for heroku
$servername = 'us-cdbr-east-02.cleardb.com';
$username = 'b01c4b8ca82976';
$password = '5e814560';
$dbname = 'heroku_62868d08fbbbc04';

//make the connection
$conn = new MySQLi($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully.";
?>
