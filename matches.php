
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
                $("#form").hide();

                $("#header").html("Here is a list of your opponents. Please Select one to report a score!");
                $.get("matchData.php", {"tourney": "<?php print $_GET['tourney']; ?>"}, function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        li.html(data[d]["fname"])
                        .click(function(){
                            $.get("scores.php", {"opponent":$(this).text()});
                            $("#form").show(100);
                            $("#form span").html($(this).text());
                            
                            
                            
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
                <ul>   
                </ul>
            </div>
            <div id="form" visibility="hidden">
                        <form id="scores" method="post" action="reportScores.php">
                        <p>Score vs <span id="opponent"></span>:</p>
                            <table>
                            <tr>
                                <td><label for="set1games">1st Set: </label></td>
                                <td><input type="number" name="set1games" min="0" max="7" maxlength="1" size="3"> - </td>
                                <td><input type="number" name="set1games2" min="0" max="7" maxlength="1" size="3"></td>
                            </tr>
                            <tr>
                                <td><label for="set2games">2nd Set: </label></td>
                                <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"> - </td>
                                <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="submit"></td>
                            </tr>
                    </form>
                </div>
        </div>
    </body>
    
</html>
