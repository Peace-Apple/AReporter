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
        <div class="admin-page">
            
        </div>
    </main>
<?php include "templates/footer.php"; ?>