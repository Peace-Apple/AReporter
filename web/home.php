<?php 
    include "templates/header.php"; 

   if($_SESSION['user']){ // checks if the user is logged in  
    $user = $_SESSION['user']; //assigns user value
   }
   else{
      header("location: index.php"); // redirects to login page if user is not logged in
   }
?>
    <main>
        <div class="home-page">
            <p class="first"><?php echo 'Hey ' .$user. ',';?></p>
            <p class="one"> Welcome to A-Reporter!</p>
            <p class="two">Witnessed an accident? Report today!</p>
            <p class="three">Reach out now!</p>
            <p class="four">Let us know today</p>
            <p class="five">Help save lives!</p>
        </div>
    </main>
<?php include "templates/footer.php"; ?>
