<?php include "../connection.php"; ?>
<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * from user WHERE username='$username'"; //Query the users table if there are matching rows equal to $username
    $result = $conn->query($query);
    $exists = mysqli_num_rows($result); //Checks if username exists
    $table_username = "";
    $table_password = "";
    
    if($exists > 0) //IF there are no returning rows or no existing username
    {
        while ($row = mysqli_fetch_assoc($result)) //display all rows from query
        {
            $table_username = $row['username'];
            $table_password = $row['password']; 
            $admin = $row['admin']; 
        }
        if (($username == $table_username) && ($password == $table_password)) // checks if there are any matching fields
        {
            if($password == $table_password)
            {
                $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
                $_SESSION['admin'] = $admin;

                if ($admin) {
                    header("location: cases.php"); // redirects the admin to the authenticated page
                } else {
                    header("location: home.php"); // redirects the user to the authenticated home page
                }
            }    
        }
        else
        {
            Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
            Print '<script>window.location.assign("index.php");</script>'; // redirects to login.php
        }
    }
    else
    {
        Print '<script>alert("Incorrect Username!");</script>';
        Print '<script>window.location.assign("index.php");</script>'; 
    }
?>
