<!--
    Assignment 04 Specification 2: NerdLuv
    Jamie Kouttu
    This php file creates a page which asks the user to input a name,
    then submits that name as part of a get request to matches-submit.php.
    For my extra feature, I have chosen to implement LGBT matches.
-->

<!doctype html>
<html lang="en-us">
<head>
    <title>View My Matches</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>
    <img src="nerdLuv.jpg" alt="nerdLuv logo"/><br/><br/>
    <form action="matches-submit.php" method="get">
        <fieldset>
            <legend>Returning User: </legend>
        <label for="userName"><strong>Name: </strong></label><input type="text" name="name" id="userName"><br/>
        <input type="submit" value="View My Matches">
        </fieldset>
    </form>
</body>
</html>