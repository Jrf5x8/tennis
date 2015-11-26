<?php

    require_once 'db.conf';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }

    $query = "SELECT name FROM tournaments";

    $mysqliResult = $mysqli->query($query);
    header('Content-Type: application/json');

    $result = json_encode(mysqli_fetch_all($mysqliResult,MYSQLI_ASSOC));

    print $result;

    //print_r(mysqli_fetch_all($mysqliResult,MYSQLI_ASSOC));




?>