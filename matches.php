
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

          
        <?php
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
        ?>    
        

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

                        h3.html(data[d]["fname"]);
//                        .click(function(){
//                            $.get("scores.php", {"opponent":$(this).text()});
//                            //$("#form").show(500);
//                            $("#form span").html($(this).text());
//                            
//                            
//                            
//                        });
                        div.html("<p>" + $("#form").html() + "</p>");


                        $("#accordion").append(h3, div);
                    }
                });

           });
                    
        </script>

