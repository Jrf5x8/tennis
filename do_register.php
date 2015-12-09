<?php
    require_once 'db.conf';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    $mysqliResult = $mysqli->query($query);

    if($mysqliResult){
        $error = "You may now login!";
        header("Location: login.php");
        exit;
    }


?>