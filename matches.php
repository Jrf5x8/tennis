
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

