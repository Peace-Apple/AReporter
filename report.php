<?php include "templates/header.php"; ?>
<?php include "connection.php"; ?>
<?php
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
            Name of victim<span class="asterik">*</span><br>
            <input type="text" name="victimname" id="victimname" required="required" />
            <br><br>
            Address of victim<span class="asterik">*</span><br>
            <input type="text" name="victimaddress" id="victimaddress" required="required" />
            <br><br>
            Gender of victim<span class="asterik">*</span>
            <div class="radio-but">
                <label for="male">
                    <input type="radio" name="victimsex" id="male" value="Male" required="required" />
                    <span class="yes">Male</span>
                </label>
                <label for="female">
                    <input type="radio" name="victimsex" id="female" value="Female" required="required" />
                    <span class="no">Female</span>
                </label>
            </div>
            <h3>REPORTER DETAILS</h3>
            Name of Reporter<span class="asterik">*</span><br>
            <input type="text" name="reportername" id="reportername" required="required" />
            <br><br>
            Contact of Reporter<span class="asterik">*</span></label><br>
            <input type="number" name="reportercontact" id="reportercontact" required="required" />
            <h3>INFORMATION ABOUT THE INCIDENT</h3>
            Location of incident<span class="asterik">*</span><br>
            <input type="text" name="location" id="location" required="required" />
            <br><br>
            Date and time of incident<span class="asterik">*</span><br>
            <input type="date" name="date" id="date" />
            <input type="time" name="time" id="time" />
            <br><br>
            Description of incident<span class="asterik">*</span><br>
            <textarea name="description" id="description" placeholder="Enter text here..."></textarea>
            <br><br>
            Were there any witnesses?<span class="asterik">*</span>
            <div class="radio-but">
                <label>
                    <input type="radio" name="witness" id="yes" value="Yes" required="required" />
                    <span class="yes">Yes</span>
                </label>
                <label>
                    <input type="radio" name="witness" id="no" value="No" required="required" />
                    <span class="no">No</span>
                </label>
            </div>
            Was the individual injured?<span class="asterik">*</span>
            <div class="radio-but">
                <label>
                    <input type="radio" name="injury" id="yes" value="Yes" required="required" />
                    <span class="yes">Yes</span>
                </label>
                <label>
                    <input type="radio" name="injury" id="no" value="No" required="required" />
                    <span class="no">No</span>                    
                </label>
            </div>
            Was medical treatment provided?<span class="asterik">*</span>
            <div class="radio-but">
                <label>
                    <input type="radio" name="treatment" id="yes" value="Yes" required="required" />
                    <span class="yes">Yes</span>
                </label>
                <label>
                    <input type="radio" name="treatment" id="no" value="No" required="required" />
                    <span class="no">No</span> 
                </label>
            </div>
            Do you want the police to get in touch with you?<span class="asterik">*</span>
            <div class="radio-but">
                <label>
                    <input type="radio" name="police" id="yes" value="Yes" required="required" />
                    <span class="yes">Yes</span>
                </label>
                <label>
                    <input type="radio" name="police" id="no" value="No" required="required" />
                    <span class="no">No</span> 
                </label>
            </div>
            <div class="check-box">
                <label>
                    <input type="checkbox" name="certify" id="checkbox-label" required="required" />
                    I certify that the above information is true and correct
                    <span class="custom-checkbox"></span>
                </label>
            </div>
            <br><br>
            <input type="submit" name="submit" value="Report Now"/>
        </form>
    </div>
</div>
<?php include "templates/footer.php"; ?>
