<!doctype html>
<html>
    <head>
       <?php 
            session_start();
            print "<h1> Welcome " . $_SESSION['loggedin'] . " </h1>";    
        ?>
        
        <title>Home Page</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            $(function(){
                $.get("homeData.php", function(data){
                    $('#test').html(data);
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