<!doctype html>
<html>
    <head>

        <title>Registration Page</title>


        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
                    
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="navbar">
                    <a href="login.php">Go Back</a>
            </div>
            <div id="header"><h1>Use this form to create user credentials</h1></div>
            <div id="loading"></div> 
            <div id="test">
                
                   <form action="do_register.php" method="post" id="registerform">
                      <div class="stack">
                       <label for="username">User name:</label>
                       <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus>
                       </div>
                       <br>
                       <div class="stack">
                       <label for="password">Password:</label>
                       <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all" >
                       </div>
                       <br>
                       <div class="stack">
                       <input type="submit" value="Submit">
                       </div>
                   </form>
                    
            </div>     
             
        </div>
        <div id="footer"><h1>Web App by: Jack Fay</h1></div>  
    </body>
    
</html>