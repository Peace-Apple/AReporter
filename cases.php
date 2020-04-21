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
    <h2>REPORTED ACCIDENTS</h2>
    <div class="cases-display">
        <p class="no-cases">
            No reported accidents at the moment...
            Report an accident:
            <a href="report.php"><button>Report Now</button></a>
        </p>
    </div>
</div>
<?php include "templates/footer.php"; ?>
