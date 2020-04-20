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
<head>
    <link rel="stylesheet" href="assets/style.css" />
    <style>
        body { 
            background: url('images/mag.jpeg');
        }
    </style>
</head>
<div class="auth-forms">
    <div class="signup">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" id="username" placeholder="Enter Username" required="required" />
            <br><br>
            <input type="text" name="email" id="email" placeholder="Enter Email" required="required" />
            <br><br>
            <input type="number" name="contact" id="contact" placeholder="Enter Contact" required="required" />
            <br><br>
            <input type="password" name="password" id="password" placeholder="Enter password" required="required" />
            <br><br>
            <input type="password" name="password" id="password" placeholder="Confirm password" required="required" />
            <br><br>
            <input type="submit" name="submit" value="Signup"/>
        </form>
        <p><a href="index.php">Have an account? Login</a></p>
    </div>
</div>
