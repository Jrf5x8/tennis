
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>

        <script>
           $(function(){
                $("#form").hide();
                $("#accordion").accordion();

                $("#header").html("Here is a list of your opponents. Please Select one to report a score!");
                $.get("matchData.php", {"tourney": "<?php print $_GET['tourney']; ?>"}, function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        var h3 = $("<h3>");
                        var div = $("<div>");

                        h3.html(data[d]["fname"]);
//                        .click(function(){
//                            $.get("scores.php", {"opponent":$(this).text()});
//                            //$("#form").show(500);
//                            $("#form span").html($(this).text());
//                            
//                            
//                            
//                        });
                        div.html($("form").html());


                        $("#accordion").append(h3, div);
                    }
                });

           });
                    
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header"></div>
            
            
            <div id="accordion">
                
            </div>
            
            
            
            
            
            
            <div id="test">
                <ul>   
                </ul>
            </div>
            <div id="form">
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
