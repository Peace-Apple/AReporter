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
            (`victimname`, `victimaddress`, `reportername`, `reportercontact`, `location`, `date`, `time`, `description`, `witness`, `injury`, `treatment`, `police`, `certify`)
            VALUES 
            ('$victimname', '$victimaddress', '$reportername', '$reportercontact', '$location', '$date', '$time', '$description', '$witness', '$injury', '$treatment', '$police', '$certify')";

        if($conn->query($sql) === TRUE){
            echo "New incident reported successfully";
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
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
            <input type="radio" name="victimsex" id="victimsex" value="Male" />Male
            <input type="radio" name="victimsex" id="victimsex" value="Female" />Female
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
            <input type="date" name="date" id="date" />
            <input type="time" name="time" id="time" />
            <br><br>
            <label for="description">Description of incident<span>*</span></label><br>
            <textarea name="description" id="description" placeholder="Enter text here..."></textarea>
            <br><br>
            <label for="witness">Were there any witnesses?<span>*</span></label><br>
            <input type="radio" name="witness" id="witness" value="Yes" />Yes
            <input type="radio" name="witness" id="witness" value="No" />No
            <br><br>
            <label for="injury">Was the individual injured?<span>*</span></label><br>
            <input type="radio" name="injury" id="injury" value="Yes" />Yes
            <input type="radio" name="injury" id="injury" value="No"/>No
            <br><br>
            <label for="treatment">Was medical treatment provided?<span>*</span></label><br>
            <input type="radio" name="treatment" id="treatment" value="Yes" />Yes
            <input type="radio" name="treatment" id="treatment" value="No"/>No
            <br><br>
            <label for="police">Do you want the police to get in touch with you?<span>*</span></label><br>
            <input type="radio" name="police" id="police" value="Yes" />Yes
            <input type="radio" name="police" id="police" value="No"/>No
            <br><br>
            <input type="checkbox" name="certify" id="certify" required="required" />
            <b>I certify that the above information is true and correct<span>*</span></b>
            <br><br>
            <input type="submit" name="submit" value="Report Now"/>
        </form>
    </div>
</div>
<?php include "templates/footer.php"; ?>
