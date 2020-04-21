<?php include "templates/header.php"; ?>
<?php include "connection.php"; ?>
<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

    $sql = "SELECT * FROM `incidents`";

?>

<div class="cases">
    <h2>REPORTED ACCIDENTS</h2>
    <div class="cases-display">
        
        <?php
            if ($result = $conn->query($sql)) {

                if( mysqli_num_rows( $result )==0 ){
                    echo "<p class='no-cases'>
                    No reported accidents at the moment...
                    Report an accident:
                    <a href='report.php'><button>Report Now</button></a>
                    </p>";

                } else {
                    echo "<table class='incident-table'>";
                        
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["id"];
                            $victimname = $row["victimname"];
                            $victimaddress = $row["victimaddress"];
                            $victimsex = $row["victimsex"];
                            $reportername = $row["reportername"];
                            $reportercontact = $row["reportercontact"];
                            $location = $row["location"];
                            $date = $row["date"];
                            $time = $row["time"];
                            $description = $row["description"];
                            $witness = $row["witness"];
                            $treatment = $row["treatment"];
                            $injury =$row["injury"];
                            $police =$row["police"];

                            echo "<tr class='title'>";
                                echo "<td>" ."INCIDENT ". $id. "</td>";
                            echo "</tr>";
                            echo "<tr class='sub-title'>";
                                echo "<td>" ."Victim's Details". "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Name: " . "</td>";
                                echo "<td>" . $victimname . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Address: ". "</td>";
                                echo "<td>" . $victimaddress . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Gender: ". "</td>";
                                echo "<td>" . $victimsex . "</td>";
                            echo "</tr>";
                            echo "<tr class='sub-title'>";
                                echo "<td>" ."Reporter's Details". "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Name: ". "</td>";
                                echo "<td>" . $reportername . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Contact: ". "</td>";
                                echo "<td>" . $reportercontact . "</td>";
                            echo "</tr>";
                            echo "<tr class='sub-title'>";
                                echo "<td>" ."Incident Details". "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Location: ". "</td>";
                                echo "<td>" . $location. "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" ."Date and time of incident: ". "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . $date. "</td>";
                                echo "<td>" . $time. "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" ."Date and time of incident: ". "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . $description . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Were there any witnesses? ". "</td>";
                                echo "<td>" . $witness. "</td>";
                            echo "</tr>"; 
                            echo "<tr>";
                                echo "<td>" . "Was the individual injured? ". "</td>";
                                echo "<td>" . $treatment. "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . "Was medical treatment provided?". "</td>";
                                echo "<td>" . $injury . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>" . "Do you want the police to get in touch with you? ". "</td>";
                                echo "<td>" . $police . "</td>";
                            echo "</tr>";

                        }
                    echo "</table>";
                // /*freeresultset*/
                // $result->free();    
                }
            $conn->close();
            }
        ?>
        
    </div>
</div>
<?php include "templates/footer.php"; ?>
