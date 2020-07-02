<?php
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'AReporter_db';

//for heroku
$servername = 'us-cdbr-east-02.cleardb.com';
$username = 'b463b1893e9e1e';
$password = '7a908ce1';
$dbname = 'heroku_b9d89c264bb4001';

//make the connection
$conn = new MySQLi($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully.";
?>
