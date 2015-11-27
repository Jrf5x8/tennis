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
        ?>
        
        <title>Home Page</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            $(function(){
                $.get("homeData.php", function(data){
                    print data;
                    for(var d in data){
                        $tourns += data[d]["name"]
                    }
                    $('#test').html($tourns);

                });
            });
                    
        </script>
    </head>
    <body>
        <div>
            <div id="test">
                <ul id="tournamentList">
                    
                </ul>
            </div>
        </div>
    </body>
    
</html>