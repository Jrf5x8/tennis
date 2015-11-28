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

    $query = "SELECT fname FROM person JOIN matches on person.id = matches.player2 WHERE matches.player1 = (SELECT id FROM person WHERE fname =          '$username')";
    $opponents = $mysqli->query($query);
    header('Content-Type: application/json');

    $result = json_encode(mysqli_fetch_all($opponents,MYSQLI_ASSOC));

    print $result;
    $result->close();
    $mysqli->close();

?>