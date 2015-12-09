        <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            
               
        ?>


<!doctype html>
<html>
    <head>

        <title>Tournament Media</title>


        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
 
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div><?php print '<a href="logout.php" id="logout">Logout</a>';
                        print '<a href="home.php">Home</a>';
                        print '<span class="clicked"><a href="tournamentMedia.php">Media</a></span>'?></div>
            <div id="header"><p>Welcome to the tournament media page!</p></div>  
            <div id="test"><ul></ul></div>        
        </div>
    </body>
    
</html>