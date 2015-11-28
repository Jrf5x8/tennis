<?php
    
    require_once 'db.conf';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }
    session_start();
    //get username
    $username = $_SESSION['loggedin'];
    $tourney = $_GET['tourney'];
    

    $query = "SELECT fname FROM person JOIN matches on person.id = matches.player2 WHERE matches.player1 = 
        (SELECT id FROM person WHERE fname = '$username') AND tournID = (SELECT id FROM tournaments WHERE name = '$tourney')";
    $opponents = $mysqli->query($query);
    header('Content-Type: application/json');

    $result = json_encode(mysqli_fetch_all($opponents,MYSQLI_ASSOC));

    
//    $result->close();
//    $mysqli->close();

    print $result;

?>