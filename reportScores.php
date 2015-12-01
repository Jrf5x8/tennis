<?php
    session_start();
    require_once 'db.conf';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }


    //print_r($_POST);
    $player1 = $_SESSION['loggedin'];
    $player2 = $_POST['opponent'];
    $winner = empty($_POST['winner']) ? $player2 : $player1;
    $matchID = $_POST['matchID'];

    $score = $_POST['set1games'] . '-' . $_POST['set1games2'] . ' ' . $_POST['set2games'] . '-' . $_POST['set2games2'];


    $query = "UPDATE matches SET winner = (SELECT id FROM person WHERE fname = '$winner'), score = '$score' WHERE id = $matchID";
;

    $mysqli->query($query);

?>




<!doctype html>
<html>
    <head>
        <title>Success!</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    </head>
    <body>
       <div id="wrapper">
        <div id="header">
            <h1>Congrats, your results have been submitted successfully.</h1>
        </div>
        <div>
            <a href="home.php">Return Home</a>
        </div>
        </div>
    </body>
</html>