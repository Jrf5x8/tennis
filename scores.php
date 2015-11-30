<?php

    $match = $_GET['opponent'];
    require_once 'db.conf';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_error){
        $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }

    print '<form action="reportScore.php" method="POST">
                <p>Score:</p>
                <div id="inline">             
                    <label for="set1games">1st Set: </label>
                    <input type="number" name="set1games" min="0" max="7" maxlength="1" size="3"> -
                    <input type="number" name="set1games2" min="0" max="7" maxlength="1" size="3">
                    </div>
                <div id="inline">
                    <label for="set2games">2nd Set: </label>
                    <input type="number" name="set2games" min="0" max="7" maxlength="1" size="3">
                    <input type="number" name="set2games" min="0" max="7" maxlength="1" size="3">
                <div id="inline">
                <input type="submit" value="submit">
            </form>'

?>