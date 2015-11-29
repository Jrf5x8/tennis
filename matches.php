<!doctype html>
<html>
    <head>
       <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            print '<a href="logout.php">Logout</a>';
            print "<h1> Welcome " . $_SESSION['loggedin'] . " </h1>";
            print json_encode($_GET['tourney']);

        ?>
        
        <title>Home Page</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
           $(function(){
                $.get("matchData.php", function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        li.html("<a href=\"#\">" + data[d]["fname"] + "</a>");
                        $("#test ul").append(li);
                    }
                    
                    });
                    
                    //$('#test').html(tourns);
              
                                               

                
            });
                    
        </script>
    </head>
    <body>
        <div>
            <div id="test">
                <h1>Please Click on Your Opponent</h1>
                <ul id="tournamentList">
                    
                </ul>
            </div>
        </div>
    </body>
    
</html>