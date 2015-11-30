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
                    <table>
                    <tr>
                        <td><label for="set1games">1st Set: </label></td>
                        <td><input type="number" name="set1games" min="0" max="7" maxlength="1" size="3"> - </td>
                        <td><input type="number" name="set1games2" min="0" max="7" maxlength="1" size="3"></td>
                    </tr>
                    <tr>
                        <td><label for="set2games">2nd Set: </label></td>
                        <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"> - </td>
                        <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit"></td>
                    </tr>
            </form>'

?>