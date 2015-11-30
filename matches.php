
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

