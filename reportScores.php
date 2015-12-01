<?php
    require_once 'db.conf';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }


    print_r($_POST);
    $player1 = $_SESSION['loggedin'];
    $player2 = $_POST['opponent'];
    $winner = empty($_POST['winner']) ? $player2 : $player1;
    $matchID = $_POST['matchID'];

    $score = $_POST['set1games'] . '-' . $_POST['set1games2'] . ' ' . $_POST['set2games'] . '-' . $_POST['set2games2'];


    $query = "INSERT INTO matches(player1, player2, winner, score) VALUES('$player1', '$player2', '$winnner', '$score') WHERE id = $matchID";

    $mysqli->query($query);

?>