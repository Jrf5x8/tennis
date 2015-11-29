<!doctype html>
<html> 
    <head>
       <link rel="stylesheet" type="text/css" href="css.css">
        <title></title>
    </head>
    <body>
      <div id="wrapper">
           <?php
                //session_start();
                //require "do_login.php";
                if($error){
                    print $error;
                }

            ?>
            <form action="login.php" method="POST">
                <input type="hidden" name="action" value="do_login">

                <input type="hidden" name="action" value="do_login">
                <p>Username:</p>
                <input name="username" type="text" autofocus value="<?php print $username ?>">
                <p>Password:</p>
                <input name="password" type="password">
                <input type="submit" value="Submit">
            </form> 
        </div>
    </body>
</html>