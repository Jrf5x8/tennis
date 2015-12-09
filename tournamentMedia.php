        <?php 
            session_start();
            if(!$_SESSION['loggedin']){
                header("Location: login.php");
                exit;
            }
            
               
        ?>


<!doctype html>
<html>
    <head>

        <title>Tournament Media</title>


        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-image-gallery.min.css">
        <script>
                            $(function(){
                                $('a').button();
                            });

        </script>
    </head>
    <body>
        <div id="wrapper">
            <div><?php print '<a href="logout.php" id="logout">Logout</a>';
                        print '<a href="home.php">Home</a>';
                        print '<span class="clicked"><a href="tournamentMedia.php">Media</a></span>'?></div>
            <div id="header"><p>Welcome to the tournament media page!</p></div>  
            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery">
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                <div class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary next">
                                    Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="links">
            <a href="http://localtenniscourtresurfacing.com/wp-content/uploads/2014/02/10-and-Under-Tennis-672x372.jpg" title="Banana" data-gallery>
                <img src="images/thumbnails/10-and-Under-Tennis.gif" alt="Banana">
            </a>
            <a href="http://assets-ssl.usta.com/assets/1/1/LandingPageLeadImage/AA_and_P_courts.jpg" title="Apple" data-gallery>
                <img src="images/thumbnails/AA_and_P_courts.gif" alt="Apple">
            </a>
            
</div>      
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
    </body>
    
</html>