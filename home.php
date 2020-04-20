<?php include "templates/header.php"; ?>

<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
?>
    <main>
        <p>
            There are no reported accidents at the moment...
        </p>
    </main>
<?php include "templates/footer.php"; ?>
