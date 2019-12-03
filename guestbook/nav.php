<?php

//Start the session
//session_start();

//If user is logged in, get username
if (isset($_SESSION['username'])) {

    //Display a welcome message
    echo "<p><a href=\"logout.php\">logout</a></p>";

    //Display a logout link
    //echo '<a href="logout.php">logout</a>';

}
