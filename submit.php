<?php
$x = $_POST['firstname'];
$y = $_POST['lastname'];
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
$sql = "INSERT INTO `user` (`fname`, `lname`) VALUES ('$x','$y')";

if($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql ."<br>". $conn->error;
}

// $sql = "SELECT id, fname, lname FROM user";
// $result = $conn->query($sql);

// if($result->num_rows > 0){
//     //output data for each row
//     echo "<table>";
//         while($row = $result->fetch_assoc()){
//             echo "<tr><td> ID: ".$row["id"]. "</td></td> Name: ".$row["fname"]. " ".$row["lname"]. "</td></tr>";

//         }
//     echo "</table>";

// } else {
//     echo "0 results";
// }
$conn->close();
?>
