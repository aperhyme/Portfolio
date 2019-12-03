<?php

// Turn on error reporting -- this is critical!
//ini_set('display_errors',1);
//error_reporting(E_ALL);

//Require database connection
require('/home/agrigore/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and Pizza CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/guestbook.css">
    <title>GuestBook</title>

</head>
<body>

<div class ="container" id="main">

<div class="jumbotron">
    <h1 class="display-4">Guest Book</h1>
    <hr class="my-4">
</div>

<form id="book-form" action="conformation.php" method="post">
    <fieldset class ="form-group">
        <legend>Sign In</legend>
        <!-- First Name | text box -->
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            <span class="err" id="err-fname">Please enter a first name</span>
        </div>
        <!-- Last Name | text box -->
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
            <span class="err" id="err-lname">Please enter a last name </span>
        </div>
        <!-- Title | text box-->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <!-- Company | text box-->
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>

        <!-- LinkedIn | text box-->
        <div class="form-group">
            <label for="linkedIn">LinkedIn</label>
            <input type="text" class="form-control" id="linkedIn" name="linkedIn">
            <span class="err" id="err-url">Please input a valid url</span>
        </div>

        <!-- Email | text box-->
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
            <span class="err" id="err-email">Please input a email containing an @ symbol and a dot(.)</span>
        </div>

        <!-- Comment -->
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" rows="3" cols="20" name="comment"></textarea>
        </div>

        <!-- checkbox with yes/no for adding the person to the mailing list -->
        <div class="form-check" id="choose1">
            <input class="form-check-input" type="checkbox" value="yes" id="list" name="list">
            <label class="form-check-label" for="list">Please add me to your mailing list</label>
        </div>

        <!-- Email format choice -->
    <div class="form-check" id="format">
        <label>Choose email format:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="format" id="mailHTML" value="HTML">
            <label class="form-check-label" for="mailHTML">HTML</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="format" id="mailText" value="Text">
            <label class="form-check-label" for="mailText">Text</label>
        </div>
    </div>

    </fieldset>

    <!-- dropdown select how did we meet -->
    <fieldset class="form-group">
        <legend>How did we meet</legend>
        <div class="form-group">
            <select class="form-control" name="meets" id="meet" onchange="check(this.value)">
                <option value="none" selected>Select a option</option>
                <option value="Meet Up">Meetup</option>
                <option value="Job Fair">Job Fair</option>
                <option value="Not Meet">We haven't met yet</option>
                <option value="other">Other</option>
            </select>
            <span class="err" id="err-meet">Please select an option</span>
            <textarea class="form-control" name="meetOther" id="otherBox" rows="3" cols="20" style="display:none">Please specify</textarea>

        </div>
    </fieldset>
    <button id="submit" type="submit" class="btn btn-primary">Submit your form</button>
    <p id="AP"><a href="http://agrigorenko.greenriverdev.com/305/guestbook/admin.php">Admin Page</a></p>
</form>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="scripts/guestbook.js"></script>


</body>
</html>