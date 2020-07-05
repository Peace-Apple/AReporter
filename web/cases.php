<?php 
    include "templates/header.php"; 
    include "../connection.php"; 

    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

    $records_per_page = 2;

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $offset = ($page - 1) * $records_per_page;
    $total_pages_sql = "SELECT COUNT(*) FROM `incidents`";
    $result_c = $conn->query($total_pages_sql);
    $total_rows = mysqli_fetch_array($result_c)[0];
    $total_pages = ceil($total_rows/$records_per_page);

    $sql = "SELECT * FROM `incidents` order by id DESC LIMIT $offset, $records_per_page"; 
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

                            echo "<tr class='title'>
                                <td colspan='2' id='inc-tit'>" ."INCIDENT ". $id. "</td>
                            </tr>
                            <tr class='sub-title'>
                                <td id='inc-subtit' colspan='2'>" ."Victim's Details". "</td>
                            </tr>
                            <tr>
                                <td>" . "Name: " . "</td>
                                <td>" . $victimname . "</td>
                            </tr>
                            <tr>
                                <td>" . "Address: ". "</td>
                                <td>" . $victimaddress . "</td>
                            </tr>
                            <tr>
                                <td>" . "Gender: ". "</td>
                                <td>" . $victimsex . "</td>
                            </tr>
                            <tr class='sub-title'>
                                <td id='inc-subtit' colspan='2'>" ."Reporter's Details". "</td>
                            </tr>
                            <tr>
                                <td>" . "Name: ". "</td>
                                <td>" . $reportername . "</td>
                            </tr>
                            <tr>
                                <td>" . "Contact: ". "</td>
                                <td>" . $reportercontact . "</td>
                            </tr>
                            <tr class='sub-title'>
                                <td id='inc-subtit' colspan='2'>" ."Incident Details". "</td>
                            </tr>
                            <tr>
                                <td>" . "Location: ". "</td>
                                <td>" . $location. "</td>
                            </tr>
                            <tr>
                                <td colspan='2'>" ."Date and time of incident: ". "</td>
                            </tr>
                            <tr>
                                <td>" . $date. "</td>
                                <td>" . $time. "</td>
                            </tr>
                            <tr>
                                <td colspan='2'>" ."Description of incident: ". "</td>
                            </tr>
                            <tr>
                                <td colspan='2'>" . $description . "</td>
                            </tr>
                            <tr>
                                <td>" . "Were there any witnesses? ". "</td>
                                <td>" . $witness. "</td>
                            </tr>
                            <tr>
                                <td>" . "Was the individual injured? ". "</td>
                                <td>" . $treatment. "</td>
                            </tr>
                            <tr>
                            <td>" . "Was medical treatment provided?". "</td>
                                <td>" . $injury . "</td>
                            </tr>
                            <tr>
                                <td>" . "Do you want the police to get in touch with you? ". "</td>
                                <td>" . $police . "</td>
                            </tr>";

                        }
                    echo "</table>";
                    /*freeresultset*/
                    $result->free(); 
                   
                    // pagination links
                    echo '<div class="page_links">';
                        echo '<a href="cases.php?page=1"><button class="buttons">First</button></a>';
                        if ($page <= 1) { 
                            $page = 1;
                        } else {
                            echo '<a href="cases.php?page=' . ($page-1) . '"><button class="buttons">< Prev</button></a>';
                        }
                        
                        for ($p=1; $p <= $total_pages; $p++) { 
                            echo '<a href="cases.php?page=' . $p . '"><button class="page_no">' . $p . '</button></a> ';
                        }
                        
                        if ($page >= $total_pages) {
                            $page = $total_pages;
                        } else {
                            echo '<a href="cases.php?page=' . ($page+1) . '"><button class="buttons">Next ></button></a>';
                        }
                        echo '<a href="cases.php?page=' . $total_pages . '"><button class="last">Last</button></a>';
                        echo '<div class="goto-page">
                            <form action="" method="GET" onsubmit="return pageValidation()">
                                <input type="submit" class="buttons" value="Go to">
                                <input type="text" class="enter-page-no" name="page" min="1" id="page-no">
                                <input type="hidden" id="total-page" value="'. $total_pages .'">
                            </form>
			            </div>';
                        $conn->close();
                    echo '</div>';
                }
            }
        ?>
    </div>
</div>
<script>
    function pageValidation(){
        var valid=true;
        var pageNo = $('#page-no').val();
        var totalPage = $('#total-page').val();
        var errorMsg = 'Something went wrong! Ensure that the page number you have entered is correct'
        if(pageNo == ""|| pageNo < 1 || !pageNo.match(/\d+/) || pageNo > parseInt(totalPage)){
            $("#page-no").css("border-color","#ee0000").show();
            alert(errorMsg);
            valid=false;
        }
        return valid;
    }
</script>
<?php include "templates/footer.php"; ?>
