<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="desciption" content="Anne Mai Særker-Sørensen Personal Portfolio">
    <meta name="keywords" content="Anne Mai Særker-Sørensen Personal Portfolio">
    
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

     <!-- favicon -->
     <link href="pixel-heart.png" rel=icon>

    <title>AS - PORTFOLIO</title>

  </head>
  <body>

    <!-- Navigation -->
    <div class="cNav">
            <?php include("nav.php");?>
        </div>
    </div>

    <!-- PROJECT 1 -->
     <div id="iPageProject1" class="page">
        <div class="banner-container">
            <div class="banner-text">
                <h2>Web Development</h2>
            </div>
        </div>
        <div class="project-container col col-md-6 ml-auto">
            <div class="project-information">
                <h3>Pocket Animals</h3>
                <h4> 
                    To project: 
                    <a href="http://annesaerker.com/pocket-animals/" target="_blank"> Pocket Animals</a>
                </h4> 
                <div class="paragraf-text">
                    <div class="text"> 
                        <p>
                            Pocket Animals was my exam assignment in connection with my course in Web Development.
                            The given exam assignment was to create a functional CMS system (web shop) that could use text files to CRUD data.
                            The main focus was the functionality of the CMS system; I chose a concept & added a few deisgn elements, 
                            to make the system a little more easy on the eye.
                        </p>
                        <p>
                            <br>• The sytem had to be a Single-page applictaion.
                            <br>• Two different users were required: a admin user and a normal user.
                            <br>• The admin user had to be able to CRUD users and products.
                            <br>• The normal user had to be able to signup, login with a session, edit their own profile, “buy” products and subscribe.
                            <br>• A form of desktopnotification, sound and google maps with markers, were also requirements.
                        </p>   
                    </div>
                </div>
                <div class="image-container">
                    <img src="img/web-development/pocket-animal-screenshot.png">
                </div>
            </div>

            <div class="additional-info">
                <div class="programs">
                    <h4>Programs</h4>
                    <p>
                        • HTML/CSS
                        <br>• JavaScript / PHP
                    </p>
                </div>

            </div>
        </div>
        
        <div class="cFooter">
            <?php include("footer.php");?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script src="scripts.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>