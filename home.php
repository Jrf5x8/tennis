        <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            print '<a href="logout.php">Logout</a>';
               
        ?>


<!doctype html>
<html>
    <head>

        <title>Home Page</title>

        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
            $(function(){
                $("#accordion").accordion();
                $("#form").hide();
                $("#header").html("<?php print "<h1> Welcome " . $_SESSION['loggedin'] . " </h1>"; ?>");
                $("#header").append("<p>Please select a tournament to get started</p>");
                $.get("homeData.php", function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        li.html("<a href=\"matches.php?tourney=" + data[d]["name"] + "\">" + data[d]["name"] + "</a>");
                        $("#test ul").append(li);
                    }
                    
                    });

            });
                    
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header"></div>  
            <div id="test"><ul></ul></div>        
        </div>
    </body>
    
</html>