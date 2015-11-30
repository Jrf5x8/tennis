        <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            print '<a href="logout.php">Logout</a>';
            print_r($_GET);
               
        ?>


<!doctype html>
<html>
       <head>
           <link rel="stylesheet" type="text/css" href="css.css">
<!--        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
           $(function(){
                $("#header").html("Here is a list of your opponents. Please Select one to report a score!");
                $("#accordion").accordion();
                $.get("matchData.php", {"tourney": "<?php print $_GET['tourney']; ?>"}, function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        var h3 = $("<h3>");
                        var div = $("<div>");
                        var p = $("<p>");

                        h3.html(data[d]["fname"]);
//                        .click(function(){
//                            $.get("scores.php", {"opponent":$(this).text()});
//                            //$("#form").show(500);
//                            $("#form span").html($(this).text());
//                            
//                            
//                            
//                        });
                        p.html($("#form").html());
                        div.html(p);

                        $("#accordion").append(h3, div);
                    }
                });

           });
                    
        </script>
    </head>    
    <body>
        <div id="wrapper">
            <div id="header"></div>  
            <div id="test"><ul></ul></div>        
            <div id="accordion">
            </div>
            <div id="form">
                        <form method="post" action="reportScores.php">
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

