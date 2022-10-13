<!--
    Assignment 04 Specification 2: NerdLuv
    Jamie Kouttu
    This php file receives a name from matches.php,
    and then outputs all the matches for the person with that name.
    For my extra feature, I have chosen to implement LGBT matches.
-->
<?php
include("common.php");
$userName = $_GET["name"]; //stores user's name in variable
$userData = getUserData($userName); //call function to find the data for the user

$userGender = $userData[1]; $userAge = $userData[2]; $userPersonality = $userData[3];
$userOS = $userData[4]; $userMinAge = $userData[5]; $userMaxAge = $userData[6];
$userOrientation = $userData[7];
//store user data in variables with clear names for easier understanding of code later on

$singles = fopen("singles.txt", "r"); //open singles.txt file
$matches = array();

while(! feof($singles))  { //while haven't reached the end of the singles file
    $line = fgets($singles); //read a line of the file
    $single = explode(",", "$line"); //split into an array delimited by "," (a comma)

    if(checkMatch($userName, $userGender, $userAge, $userPersonality,
    $userOS, $userMinAge, $userMaxAge, $userOrientation, $single)){ //if the single is a match
        $matches[] = $single; //add the single to the end an array of matches' data
    }
}

fclose($singles); //close the file
?>

<!doctype html>
<html lang="en-us">
<head>
    <title>My Matches!</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <img src="nerdLuv.jpg" alt="nerdLuv logo"/><br/><br/>

    <h1>Matches for <?= $userName?></h1>

    <?php
    for($i = 0; $i < count($matches); $i++){
        //loops as many times as there are matches to output each of the matches
        ?>
        <div class="match">
            <p><img src="user.jpg" alt="user image"/><?= $matches[$i][0]?></p>
            <ul>
                <li><strong>gender: </strong><?= $matches[$i][1]?></li>
                <li><strong>age: </strong><?= $matches[$i][2]?></li>
                <li><strong>personality: </strong><?= $matches[$i][3]?></li>
                <li><strong>OS: </strong><?= $matches[$i][4]?></li>
            </ul>
        </div>
    <?php
    }
    ?>
</body>
</html>
