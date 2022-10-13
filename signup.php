<!--
    Assignment 04 Specification 2: NerdLuv
    Jamie Kouttu
    NOTE: This file was not required by the Specification Two instructions,
    but I chose to build it for practice

    This php file asks the user to submit various pieces of information,
    then sends that data as a POST to signup-submit.php.
    For my extra feature, I have chosen to implement LGBT matches.
-->

<!doctype html>
<html lang="en-us">
<head>
    <title>New User Signup Page</title>
    <link rel="stylesheet" href="nerdieluv.css">
</head>

<body>

<img src="nerdLuv.jpg" alt="nerdLuv logo"/><br/><br/>

<form action="signup-submit.php" method="post">
    <fieldset>
        <legend>New user signup: </legend>
        <label for="username"><strong>Name: </strong></label>
        <input type="text" name="name" id="username" maxlength="16"><br/>
        <strong>Gender: </strong>
            <input type="radio" id="male" name="gender" value="M">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Female</label><br/>
        <label for="userage"><strong>Age: </strong></label><input type="text" name="age" id="userage" size="6"><br/>
        <label for="userpersonality"><strong>Personality Type: </strong></label>
        <input type="text" name="personality" id="userpersonality" size="6">
        (<a href="https://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your personality type?</a>)<br/>
        <label for="favOS"><strong>Favorite OS: </strong></label>
        <select name="OS" id="favOS">
            <option value="Windows">Windows</option>
            <option value="Mac OS X">Mac OS X</option>
            <option value="Linux">Linux</option>
        </select><br/>
        <label for="minimum"><strong>Seeking age: </strong>
        </label><input type="text" name="minAge" id="minimum" value="min" size="6">
        <label for="maximum"> to </label><input type="text" name="maxAge" id="maximum" value="max" size="6"><br/>
        <strong>Seeking Gender(s): </strong>
        <input type="checkbox" id="men" name="men" value="M">
        <label for="men">Male</label>
        <input type="checkbox" id="women" name="women" value="F">
        <label for="women">Female</label><br/>
        <input type="submit" value="Sign Up">
    </fieldset>
</form>

</body>
</html>
