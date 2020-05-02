<?php include "templates/header.php"; ?>
<?php include "connection.php"; ?>
<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $victimname = $_POST['victimname'];
        $victimaddress = $_POST['victimaddress'];
        $victimsex = $_POST['victimsex'];
        $reportername = $_POST['reportername'];
        $reportercontact = $_POST['reportercontact'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $description = $_POST['description'];
        $witness = $_POST['witness'];
        $injury = $_POST['injury'];
        $treatment = $_POST['treatment'];
        $police = $_POST['police'];
        $certify = $_POST['certify'];
        

        $sql = "INSERT INTO `incidents` 
            (`victimname`, `victimaddress`,`victimsex`, `reportername`, `reportercontact`, `location`, `date`, `time`, `description`, `witness`, `injury`, `treatment`, `police`, `certify`)
            VALUES 
            ('$victimname', '$victimaddress','$victimsex', '$reportername', '$reportercontact', '$location', '$date', '$time', '$description', '$witness', '$injury', '$treatment', '$police', '$certify')";

        if($conn->query($sql) === TRUE){
            Print '<script>alert("New incident reported successfully");</script>';
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
            Print '<script>alert("Something went wrong, please try again");</script>';
        }
        $conn->close();
        Print '<script>window.location.assign("cases.php");</script>';
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
            <label for="victimsex">Gender of victim<span>*</span></label><br><br>
            <div class="radio-but">
                <input type="radio" name="victimsex" id="victimsex" value="Male" required="required" />
                <label for="male">Male</label>
                <input type="radio" name="victimsex" id="victimsex" value="Female" required="required" />
                <label for="female">Female</label>
            </div>
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
            <input type="date" name="date" id="date" />
            <input type="time" name="time" id="time" />
            <br><br>
            <label for="description">Description of incident<span>*</span></label><br>
            <textarea name="description" id="description" placeholder="Enter text here..."></textarea>
            <br><br>
            <label for="witness">Were there any witnesses?<span>*</span></label><br>
            <input type="radio" name="witness" id="witness" value="Yes" required="required" />
            <label for="yes">Yes</label>
            <input type="radio" name="witness" id="witness" value="No" required="required" />
            <label for="no">No</label>
            <br><br>
            <label for="injury">Was the individual injured?<span>*</span></label><br>
            <input type="radio" name="injury" id="injury" value="Yes" required="required" />
            <label for="yes">Yes</label>
            <input type="radio" name="injury" id="injury" value="No" required="required" />
            <label for="no">No</label>
            <br><br>
            <label for="treatment">Was medical treatment provided?<span>*</span></label><br>
            <input type="radio" name="treatment" id="treatment" value="Yes" required="required" />
            <label for="yes">Yes</label>
            <input type="radio" name="treatment" id="treatment" value="No" required="required" />
            <label for="no">No</label>
            <br><br>
            <label for="police">Do you want the police to get in touch with you?<span>*</span></label><br>
            <input type="radio" name="police" id="police" value="Yes" required="required" />
            <label for="yes">Yes</label>
            <input type="radio" name="police" id="police" value="No" required="required" />
            <label for="yes">No</label>
            <br><br>
            <input type="checkbox" name="certify" id="certify" required="required" />
            <b>I certify that the above information is true and correct<span>*</span></b>
            <br><br>
            <input type="submit" name="submit" value="Report Now"/>
        </form>
    </div>
</div>
<?php include "templates/footer.php"; ?>
