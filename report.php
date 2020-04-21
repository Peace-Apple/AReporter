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
    <h2>ACCIDENT REPORT FORM</h2>
    <div class="form">
        <form action="report.php" method="post">
            <h3>PERSON INVOLVED IN INCIDENT</h3>
            <label for="victimname">Name of victim<span>*</span></label><br>
            <input type="text" name="victimname" id="victimname" required="required" />
            <br><br>
            <label for="victimaddress">Address of victim<span>*</span></label><br>
            <input type="text" name="victimaddress" id="victimaddress" required="required" />
            <br><br>
            <label for="victimsex">Sex of victim<span>*</span></label><br><br>
            <input type="radio" name="victimsex" id="victimsex" required="required" />Male
            <input type="radio" name="victimsex" id="victimsex" required="required" />Female
            <input type="radio" name="victimsex" id="victimsex" required="required" />Not certain
            <br><br>
            <h3>REPORTER DETAILS</h3>
            <label for="reportername">Name of Reporter<span>*</span></label> <br>
            <input type="text" name="reportername" id="reportername" required="required" />
            <br><br>
            <label for="reportercontact">Contact of Reporter<span>*</span></label><br>
            <input type="number" name="reportercontact" id="reportercontact" required="required" />
            <h3>INFORMATION ABOUT THE INCIDENT</h3>
            <label for="location">Location of incident<span>*</span></label><br>
            <input type="text" name="location" id="location" required="required" />
            <br><br>
            <label for="incidentdate">Date and time of incident<span>*</span></label><br>
            <input type="date" name="date" id="date" required="required" />
            <input type="time" name="date" id="date" required="required" />
            <br><br>
            <label for="description">Description of incident<span>*</span></label><br>
            <textarea name="description" form="description">Enter text here...</textarea>
            <br><br>
            <label for="witness">Were there any witnesses?<span>*</span></label><br>
            <input type="radio" name="witness" id="witness" required="required" />Yes
            <input type="radio" name="witness" id="witness" required="required" />No
            <br><br>
            <label for="witness">Was the individual injured?<span>*</span></label><br>
            <input type="radio" name="witness" id="witness" required="required" />Yes
            <input type="radio" name="witness" id="witness" required="required" />No
            <br><br>
            <label for="witness">Was medical treatment provided?<span>*</span></label><br>
            <input type="radio" name="witness" id="witness" required="required" />Yes
            <input type="radio" name="witness" id="witness" required="required" />No
            <br><br>
            <label for="police">Do you want the police to get in touch with you?<span>*</span></label><br>
            <input type="radio" name="police" id="police" required="required" />Yes
            <input type="radio" name="police" id="police" required="required" />No
            <br><br>
            <input type="checkbox" name="check" id="check" required="required" />
            <b>I certify that the above information is true and correct<span>*</span></b>
            <br><br>
            <input type="submit" name="submit" value="Report Now"/>
        </form>
    </div>
</div>
<?php include "templates/footer.php"; ?>
