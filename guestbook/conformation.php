<?php
//Connect to db
require('/home/agrigore/connect.php');

    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
    $email = $_POST["email"];
    $linkedIn = $_POST["linkedIn"];
    $list = $_POST["list"];
    $company = $_POST["company"];
    $title = $_POST["title"];
    $comment = $_POST["comment"];
    $format = $_POST["format"];

    $meet = $_POST["meets"];
    $meetOther = $_POST["meetOther"];
    if($meet == 'other'){
        $meet = $meetOther;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
</head>
<body>
    <h1>Thank you for signing</h1>

    <h3>Confirmation</h3>

<?php

    /*
    ["firstName"]=>"Alex"
    ["lastName"]=>"Grigorenko"
    ["title"]=> "dad"
    ["company"]=>"asdfghj"
    ["linkedIn"]=> "sdfgh"
    ["email"]=>"alexgrigorenko1@gmail.com"
    ["format"]=>"mailHTML"
    ["meet"]=>"Please specify" }

    var_dump($_POST);
    */
    $isValid = true;

    if($first != ""){
        $firstName = $first;
    }
    else{
        echo "<p>First name is required</p>";
        $isValid = false;
    }

    if($last != ""){
        $lastName = $last;
    }
    else{
        echo "<p>Last name is required</p>";
        $isValid = false;
    }

    if ($email == "") {
        $emails = $email;
    }
    else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Invalid email format</p>";
            $isValid = false;
        }
    }

    if ($linkedIn == "") {
        $link = $linkedIn;
    }
    else{
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedIn)) {
            echo "<p>LinkedIn is invalid</p>";
            $isValid = false;
        }
    }

    if($meet == "none") {
        echo "<p>Please select how we meet option</p>";
        $isValid = false;
    }



    if(isset($list) && $list!="" && $email == "") {
        echo "<p>Email is required</p>";
        $isValid = false;
    }


    if($isValid) {

        $sql = "INSERT INTO guestbook(first, last, title, company, linkedIn, email, comment, list, format, meet)
                        VALUES ('$first', '$last', '$title', '$company', '$linkedIn', '$email',
                           '$comment', '$list', '$format', '$meet')";
       // echo $sql; //copy/past into phpMYAdmin to test

        $result = mysqli_query($cnxn, $sql);


        if ($result) {

            //If successful, print summary
            echo "<p>Name: $first $last</p>";
            echo "<p>Title: $title</p>";
            echo "<p>Company: $company</p>";
            echo "<p>Comment: $comment</p>";
            echo "<p>Email: $email</p>";
            echo "<p>LinkedIn: $linkedIn</p>";
            echo "<p>How we meet: $meet</p>";
            echo "<p>Added to mailing list: $list</p>";
            echo "<p>Format: $format</p>";
        }
    }
?>
</body>
</html>