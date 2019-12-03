<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and Pizza CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="portfolio/style/newstyle.css">
    <title>Portfolio</title>

</head>
<body>

<!-- navbar with links to the different pages -->
<div class="topnav navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a href="https://www.linkedin.com/in/alex-grigorenko-684a53195/" target="_blank">LinkedIn</a>
    <a href="http://agrigorenko.greenriverdev.com/305/resume/resume.html" target="_blank">Resume</a>
    <a href="http://agrigorenko.greenriverdev.com/305/guestbook/index.php" target="_blank">GuestBook</a>
    <a href="http://agrigorenko.greenriverdev.com/305/guestbook/login.php" target="_blank">Admin</a>
</div>

<div class ="container" id="main">

    <div class="jumbotron">
        <h1 class="display-4 text-center">Alex Grigorenko</h1>
        <hr class="my-4">
    </div>

    <form id="port-form">
        <!-- About me fieldset including the p tag with the text -->
        <fieldset class ="form-group">
            <legend>About ME</legend>
            <div class="form-group">
                <p for="aboutMe">My name is Alex and I am currently studying for my Bachelors in Software Development at  Green River College.
                    When my family immigrated from Ukraine to the United States, I was a young boy and learned everything I knew from my two older brothers.
                    My brothers loved playing computer games and learning how to build and take apart different equipment.
                    Soon enough, my hobbies became the same as theirs. As I got older, I saw the influence that companies such as Apple, Microsoft, and Facebook have in the emerging tech space and it confirmed my desire to build my career in that field.
                    After taking a few introductory classes in technology at Green River College, I decided to finally pursue software development.
                    In the future, I hope to take the skills that I learn in my major beyond my job. I want to use it to impact my community and serve in non-profit organizations
                    by being able to offer my knowledge as a free resource to help organizations to continue to do good in the modern world.</p>

            </div>
        </fieldset>

        <!-- first project with img and description -->
        <fieldset class="form-group" id="project">
            <legend>I.DAY.DREAM</legend>
            <div class="form-group">
                <p id="GB"><a href="http://ostrich-adventure.greenriverdev.com/volform.php" target="_blank"><img src="portfolio/IDayDream.png" alt="I Day Dream"></a>
                    Group project for a non-profit organization.
                    We created two forms one for volunteers to sign-up and one for participants.
                    It allows users wanting to volunteer for the I.Day.Dream organization to have a simple, and easy way to sign-up.
                    This goes the same for the participants.
                    We also created an admin page for the staff to be able to see manage who signed up.</p>

            </div>
        </fieldset>

        <!-- Second Project with img and description -->
        <fieldset class="form-group" id="project">
            <legend>InfaRacing</legend>
            <div class="form-group">
                <p id="GB"><a href="http://agrigorenko.greenriverdev.com/it207/final/" target="_blank"><img src="portfolio/info%20Racing.png" alt="Info Racing"></a>
                    My friend and I created this small website as our final project for our JavaScript class.
                    It allows the user to look up there car specs,
                    play a puzzle game, and check out an car recommendation page for top rated middle class cars.</p>
            </div>
        </fieldset>
    </form>
</div>

<!-- footer at the bottom of page -->
<?PHP
    include "portfolio/pFooter.php";
?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="portfolio/script.js"></script>

</body>
</html>