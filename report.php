<?php include "templates/header.php"; ?>
<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

?>

<div class ="report-form">
    <div class="form">
        <h2>Report an accident now!</h2>
        <form action="report.php" method="post">
            <label for="reportername">Name of Reporter</label> <br>
            <input type="text" name="reportername" id="reportername" required="required" />
            <br><br>
            <label for="victimname">Name of victim</label><br>
            <input type="text" name="victimname" id="victimname" required="required" />
            <br><br>
            <label for="victimaddress">Address of victim</label><br>
            <input type="text" name="victimaddress" id="victimaddress" required="required" />
            <br><br>
            <label for="victimcontact">Contact of victim</label><br>
            <input type="number" name="victimcontact" id="victimcontact" required="required" />
            <br><br>
            <label for="reportercontact">Contact of Reporter</label><br>
            <input type="text" name="reportercontact" id="reportercontact" required="required" />
            <br><br>
            <label for="victimsex">Sex of victim</label><br>
            <input type="radio" name="victimsex" id="victimsex" required="required" />
            <br><br>
            <label for="reportersex">Sex of Reporter</label><br>
            <input type="radio" name="reportersex" id="reportersex" required="required" />
            <br><br>
            <label for="location">Location of incident</label><br>
            <input type="text" name="location" id="location" required="required" />
            <br><br>
            <label for="incidentdate">Date and time of incident</label><br>
            <input type="text" name="incidentdate" id="incidentdate" required="required" />
            <br><br>
            <label for="reportdate">Date of report</label><br>
            <input type="text" name="reportdate" id="reportdate" required="required" />
            <br><br>
            <label for="victimname">Name of victim</label><br>
            <input type="text" name="victimname" id="victimname" required="required" />
            <br><br>
            <label for="description">Description of incident</label><br>
            <textarea name="description" form="description">Enter text here...</textarea>
            <br><br>
            <label for="info">Additional Information</label><br>
            <textarea name="info" form="info">Enter text here...</textarea>
            <br><br>
            <input type="submit" name="submit" value="Report"/>
        </form>
    </div>
</div>
<?php include "templates/footer.php"; ?>
