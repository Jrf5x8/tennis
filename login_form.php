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
        <h1 class="ui-widget-header">Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            <input type="hidden" name="action" value="do_login">
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php $username = "Jack"; print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all" value="test">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>
        <a href="register.php">Click Here to Register!</a>
    </div>
    </body>
</html>