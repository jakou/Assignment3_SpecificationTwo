<!--
    Assignment 04 Specification 2: NerdLuv
    Jamie Kouttu
    This php file contains two functions used in matches-submit.php:
    getUserData() and checkMatch().
    For my extra feature, I have chosen to implement LGBT matches.
-->

<?php
//function to find the single from the file whose name matches the user's name. returns an array of the data
function getUserData($userName): ?array
{
    $singles = fopen("singles.txt", "r"); //open singles.txt file

    while(! feof($singles))  { //while haven't reached the end of the singles file
        $line = fgets($singles); //read a line of the file
        $single = explode(",", "$line"); //split into an array delimited by "," (a comma)

        if($single[0] == $userName){ //if the name field of the array matches the user's name
            fclose($singles); //closes the singles.txt file
            return $single; //returns the array containing the user's data
        }
    }
    return null;
    //since the assignment states we may assume the name parameter will be found in the file
    //no check for if the returned value was null is actually necessary after this function returns something
    //but not having any return here causes a warning
}

//function to check if a single is a match to the user
function checkMatch($userName, $userGender, $userAge, $userPersonality,
                    $userOS, $userMinAge, $userMaxAge, $userOrientation, $single): bool
{
    if($userName == $single[0]){ //if the single is the user, not a match
        return false;
    }
    if($userOrientation[0] == $single[1] || $userOrientation[1] == $single[1]){
        //if user is seeking people of the single's gender, may be a match
        if($single[7][0] == $userGender || $single[7][1] == $userGender) {
            //if user is of the gender the single is seeking, may be a match
            if ($userOS == $single[4]) { //if favorite OS are the same, may be a match
                if ($userPersonality[0] == $single[3][0] || $userPersonality[1] == $single[3][1]
                    || $userPersonality[2] == $single[3][2] || $userPersonality[3] == $single[3][3]) {
                    if ($userAge >= $single[5] && $userAge <= $single[6]) {
                        //if the user is within the single's age range, may be a match
                        if ($single[2] >= $userMinAge && $single[2] <= $userMaxAge) {
                            //if the single is within a user's age range, is a match
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false; //if doesn't reach the return true statement inside the nested if statements, not a match
}

