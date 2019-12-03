<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//If the user is already logged in
if (isset($_SESSION['username'])) {
    //Redirect to page 1
    header('location: admin.php');
}

//If the login form has been submitted
if(isset($_POST['submit'])) {
    //Include creds.php (eventually, passwords should be moved to a secure location
    //or stored in a database)
    include ('creds.php');

    //Get the username and password from the POST array
    $username = $_POST["username"];
    $password = $_POST["password"];

    //If the username and password are correct
    if (array_key_exists($username, $login) && $login["$username"] == $password) {
        //Store login name in a session variable
        $_SESSION['username'] = $username;

        //Redirect to page 1
        header('location: admin.php');
    }

    //Login credentials are incorrect
    echo "<p>Invalid login</p>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap and Pizza CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/guestbook.css">

    <title>Log In</title>

</head>
<body>

<div class ="container" id="main">

    <div class="jumbotron">
        <h1 class="display-4">Admin Login</h1>
        <hr class="my-4">
    </div>

<form method="post" action="#">
    <label>Username:
        <input type="text" name="username">
    </label><br>

    <label>Password:
        <input type="password" name="password">
    </label><br>

    <input type="submit" name="submit" value="Submit">
</form>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="scripts/guestbook.js"></script>

</body>
</html>
