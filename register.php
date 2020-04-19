<?php include "connection.php"; ?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO `user` (`username`, `email`, `contact`, `password`) VALUES ('$name', '$email', '$contact', '$pass')";


        if($conn->query($sql) === TRUE){
            echo "New record created successfully";
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }
?>

<div>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username</label> <br>
        <input type="text" name="username" id="username" required="required" />
        <br><br>
        <label for="email">Email Address</label><br>
        <input type="text" name="email" id="email" required="required" />
        <br><br>
        <label for="contact">Contact</label><br>
        <input type="number" name="contact" id="contact" required="required" />
        <br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required="required" />
        <br><br>
        <input type="submit" name="submit" value="Register"/>
    </form>
</div>

<a href="index.php">Back to home</a>
