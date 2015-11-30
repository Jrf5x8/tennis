<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">

       <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            print '<a href="logout.php">Logout</a>';
               
        ?>
        
        <title>Home Page</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            $(function(){
                $("#header").html("<?php print "<h1> Welcome " . $_SESSION['loggedin'] . " </h1>"; ?>");
                $("#header").append("<p>Please select a tournament to get started</p>");
                $.get("homeData.php", function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
//                        li.html("<a href=\"matches.php\">" + data[d]["name"] + "</a>")
                        li.html(data[d]["name"])
                        .click(function(){
                            $.get("matches.php", {"tourney": $(this).text()});
                            window.location("matches.php");
                        });
                        $("#test ul").append(li);
                    }
                    
                    });

            });
                    
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header"></div>
            <div id="test">
                <ul id="tournamentList">
                    
                </ul>
            </div>
        </div>
    </body>
    
</html>