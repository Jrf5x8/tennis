<!doctype html>
<html> 
    <head>
        <title></title>
    </head>
    <body>
       <?php
            session_start();
            //require "do_login.php";
            if(!empty($_SESSION['error'])){
                print $_SESSION['error'];
            }

        ?>
        <form action="do_login.php" method="POST">
            <input type="hidden" name="action" value="do_login">
            <p>Username:</p>
            <input name="username" type="text" value="<?php session_start(); print empty($_POST['username']) ? '' : $_POST['username']; ?>">
            <p>Password:</p>
            <input name="password" type="password">
            <input type="submit" value="Submit">
        </form> 
    </body>
</html>