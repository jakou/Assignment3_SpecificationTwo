<!--
    Assignment 04 Specification 2: NerdLuv
    Jamie Kouttu
    NOTE: This file was not required by the Specification Two instructions,
    but I chose to build it for practice

    This php file receives data in a POST from signup.php,
    then stores the data in the singles.txt file.
    For my extra feature, I have chosen to implement LGBT matches.
-->

<?php
//stores the data submitted in the form and sent by post in corresponding variables
$name = $_POST["name"]; //user's name
$gender = $_POST["gender"]; //user's gender
$age = $_POST["age"]; //user's age
$OS = $_POST["OS"]; //user's favorite OS
$personality = $_POST["personality"]; //user's personality type
$minAge = $_POST["minAge"]; //minimum age user is looking for
$maxAge = $_POST["maxAge"]; //maximum age user is looking for
$seekingMen = $_POST["men"]; //if user is seeking men
$seekingWomen = $_POST["women"]; //if user is seeking women
file_put_contents("singles.txt", PHP_EOL ."$name,$gender,$personality,$OS,$minAge,$maxAge,$seekingMen$seekingWomen" . PHP_EOL, FILE_APPEND);
//adds the submitted data as a new line in the singles.txt document
?>

<!doctype html>
<html lang="en-us">
<head>
    <title>NerdLuv Signup Successful!</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <img src="nerdLuv.jpg" alt="nerdLuv logo"/><br/><br/>
    <h1>Thank you!</h1>
    Welcome to NerdLuv, <?= $name?>!<br/>
    <p>Now <a href="matches.php">log in to see your matches!</a></p>
    <p>This page is for single nerds to meet and date each other!
        Type in your personal information and wait for the nerdly luv to begin!
        Thank you for using our site.</p>
    <p>Results and page (C) Copyright NerdLuv Inc.</p>
    <a href="index.php">
        <img src="backButton.jpg" alt="back button" style="vertical-align:middle"/>
        Back to front page</a>
</body>
</html>