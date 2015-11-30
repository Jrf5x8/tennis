<!doctype html>
<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">
        <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
        <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
        <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
        <title>Login</title>
    </head>
    <body>
      <div id="loginWidget" class="ui-widget">
        <h1>Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
            <form action="login.php" method="POST">
                <input type="hidden" name="action" value="do_login">

                <input type="hidden" name="action" value="do_login">
                <p>Username:</p>
                <input name="username" type="text" autofocus value="<?php print $username ?>">
                <p>Password:</p>
                <input name="password" type="password">
                <br>
                <input type="submit" value="Submit">
            </form> 
        </div>
    </body>
</html>