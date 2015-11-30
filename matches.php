
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
        ?>    
        
        
        
        <title>Home Page</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
           $(function(){
                $("#header").html("Here is a list of your opponents. Please Select one to report a score!");
                $.get("matchData.php", {"tourney": "<?php print $_GET['tourney']; ?>"}, function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        li.html(data[d]["fname"])
                        .click(function(){
                            $.get("scores.php", {"opponent":$(this).text()}, function(data){
                                $("#test").html(data);
                            });
                            
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
