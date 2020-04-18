<?php
$first = $_POST['firstname'];
$last = $_POST['lastname'];
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
echo "Connected successfully."; 
$sql = "INSERT INTO `user` (`fname`, `lname`) VALUES ('$first','$last')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql ."<br>". $conn->error;
}

$conn->close();
?>
