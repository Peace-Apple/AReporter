<!DOCTYPE html>
<html lang="en">
<head>
    <title>AReporter</title>
    <link rel="stylesheet" href="assets/style.css" />
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="mainbody">
    <?php
        session_start(); //starts session
        if($_SESSION['user']){

        }
        $user = $_SESSION['user'];
    ?>
    <div  class="content-wrap">
        <div class="main">
        <header>
            <nav class="fixed-nav">
                <?php 
                if ($user != 'Deyo') {
                    echo '<div class="header-title">
                            <h2><a href="home.php">A-Reporter<a></h2>
                        </div>
                    <ul>
                        <li><a href="cases.php">Incidents<a></li>
                        <li><a href="report.php">Report Accident<a></li>
                        <li><a href="logout.php">Logout<a></li>
                    </ul>';
                } else {
                    echo'<div class="header-title">
                            <h2><a href="cases.php">A-Reporter<a></h2>
                         </div>
                    <ul>
                        <li><a href="cases.php">Incidents<a></li>
                        <li><a href="logout.php">Logout<a></li>
                    </ul>';
                }
                ?>
                
            </nav>
        </header>
