        <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            //print $_GET['tourney'];
               
        ?>


<!doctype html>
<html>
       <head>
       <meta charset="utf-8">
       <title>Matches</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function() {
                $('#nav a').button();
                
                $( "#accordion" ).accordion({
                    collapsible: true,
                    active: false
                });
            });
  </script>
        <script>
           $(function(){
                $(document)
                    .ajaxStart(function(){
                        $("#loading").html("<h1>Loading...</h1>");
                    })
                
                    .ajaxStop(function(){
                        $("#loading").html("");
                    });               
               
               
                $("#header").html("<p>Here is a list of your opponents. Please Select one to report a score!</p>");
                $("#form").hide();
                $.get("matchData.php", {"tourney": "<?php print $_GET['tourney']; ?>"}, function(data){
                    console.log(data);
                    for(var d in data){
                        var li = $("<li>");
                        var h3 = $("<h3>");
                        var div = $("<div id=\"" + d + "\">");
                        var p = $("<p>");
                        var span = $("<span class=\"hide\">");
                        span.html(data[d]["id"]);
                        //$("form #addID").append(input);
                        h3.html(data[d]["fname"]);
                        $("#form span").html(data[d]["fname"]);
                        
                        p.html($("#form").html() + "<span class=\"hide\">" + data[d]["id"] + "</span>");
                        div.html(p);

                        $("#accordion").append(h3, div);
                        $("#accordion").accordion("refresh");
                    }
                });
               
               $("#accordion").click(function(){
                    console.log($(".ui-accordion-header-active").text());
                    $(".ui-accordion-content-active p form #opponent", this).attr("value", $(".ui-accordion-header-active").text());
                    $(".ui-accordion-content-active p form #matchID", this).attr("value", $(".ui-accordion-content-active .hide").text());

                   $(this).accordion("refresh");
                });
               
               
           });
               
        </script>
    </head>    
    <body>
        <div id="wrapper">
           <div id="navbar">
                    <span id="logout"><a href="logout.php">Logout</a></span>
                    <a href="home.php">Home</a>
                    <a href="tournamentMedia.php">Media</a>
            </div>
            <div id="header"></div>
            <div id="loading"></div>  
            <div id="accordion">
            </div>
            
            <div id="form">
                        <form method="post" action="reportScores.php">
                        <input type="hidden" id="opponent" name="opponent" value>
                        <input type="hidden" id="matchID" name="matchID" value>
                        <p>Score vs <span></span>:</p>
                            <table>
                            <tr>
                                <td><label for="set1games">1st Set: </label></td>
                                <td><input type="number" name="set1games" min="0" max="7" maxlength="1" size="3"> - </td>
                                <td><input type="number" name="set1games2" min="0" max="7" maxlength="1" size="3"></td>
                            </tr>
                            <tr>
                                <td><label for="set2games">2nd Set: </label></td>
                                <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"> - </td>
                                <td><input type="number" name="set2games2" min="0" max="7" maxlength="1" size="3"></td>
                            </tr>
                            <tr>
                                <td><label for="winner">I won:</label></td>
                                <td><input type="checkbox" name="winner"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="submit"></td>
                            </tr>
                    </form>
                </div>

        </div>
        
        
        <div id="footer"><h1>Web App by: Jack Fay</h1></div>  

    </body>
</html>

