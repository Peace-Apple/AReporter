<?php
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'AReporter_db';

//for heroku
$servername = 'us-cdbr-east-02.cleardb.com';
$username = 'b3f0fb98b6d83a';
$password = 'df6e6888';
$dbname = 'heroku_88c56968840da86';

//make the connection
$conn = new MySQLi($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully.";

?>
