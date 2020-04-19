<?php include "templates/header.php"; ?>
<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

?>

<div class="cases">
    <h2>No reported accidents yet...</h2>
</div>
<?php include "templates/footer.php"; ?>
