<?php
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$pass = $_POST['password'];
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
$sql = "INSERT INTO `user` (`fname`, `lname`, `email`, `contact`, `password`) VALUES ('$first','$last', '$email', '$contact', '$pass')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql ."<br>". $conn->error;
}

$conn->close();
?>
