<?php

    $match = $_GET['opponent'];
    require_once 'db.conf';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }

    print '<form action="reportScore.php" method="POST"><p>Score:</p><input type="text" name="score"><input type="submit" value="submit"></form>'

?>