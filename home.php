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

        <title>Home Page</title>


        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>

            $(function(){
                $(document)
                    .ajaxStart(function(){
                        $("#loading").html("<h1>Loading...</h1>");
                    })
                
                    .ajaxStop(function(){
                        $("#loading").html("");
                    });
                
                $("#accordion").accordion();
                $("#form").hide();
                $("#header").html("<?php print "<h1> Welcome " . $_SESSION['loggedin'] . " </h1>"; ?>");
                $("#header").append("<p>Please select a tournament to view your opponents</p>");
                $.get("homeData.php", function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li id=\"homeLI\">");
                        li.button();
                        li.html("<a href=\"matches.php?tourney=" + data[d]["name"] + "\">" + data[d]["name"] + "</a>");
                        $("#test ul").append(li);
                    }
                    
                    });
                
                //$('a').button();

            });
                    
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="navbar">
                    <span id="logout"><a href="logout.php">Logout</a></span>
                    <span class="homebutton"><a href="home.php">Home</a></span>
                    <a href="tournamentMedia.php">Media</a>
            </div>
            <div id="header"></div>
            <div id="loading"></div> 
            <div id="test"><ul></ul></div>     
             
        </div>
        <div id="footer"><h1>Web App by: Jack Fay</h1></div>  
    </body>
    
</html>