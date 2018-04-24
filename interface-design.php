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
     <div id="iPageProject2" class="page">
        <div class="banner-container">
            <div class="banner-text">
                <h2>Interface Design</h2>
            </div>
        </div>
        <div class="project-container col col-md-6 ml-auto">
            <h3>Tech'n</h3>
            <h4> 
                To project: 
                <a href="http://annesaerker.com/dist/events.html" target="_blank">Tech'n</a>
            </h4> 
            <div class="paragraf-text">
                <div class="text"> 
                    <p>
                        Tech’n was our exam assignment for our course in Interface Design. 
                        The given assignment was to design an interface for a fictitious start-up company 
                        that organizes tech-related events (our choice of name for the company was Tech’n). 
                        The company had to be focused on creating tech events and attracting event planners 
                        that could be involved in the growth of the company.   
                    </p>
                    <p>
                        These were the requirements for the platform: <br>
                        •	Access the application as administrators through a login and create accounts for potential future members of the board<br>
                        •	Manage events (view, publish, edit, remove)<br>
                        •	Have an overview of all events<br>
                        •	Have an overview of partners <br>
                        •	Have some dashboard-view statistics about how the events are doing <br>
                        •	Have some form of extra feature that should be added in the final product.<br>
                    </p> 
                    <p>
                        Our process included conceptualizing, researching, testing, wire-framing and delivering mockups and finally 
                        developing a static web application with a content management system. 
                    </p>   
                </div>
            </div>

             <div class="image-container">
                <img src="img/interface-design/techn-frontpage.png">
            </div>

            <div class="additional-info">
                <div class="programs">
                    <h4>Programs</h4>
                    <p>
                        • HTML / SASS
                        <br>• JavaScript
                        <br>• Gulp / Handlebars
                        <br>• Git
                        <br>• Sketch / Invision 
                    </p>
                </div>
                <div class="collaboration">
                    <h4>Collaboration</h4>
                    <p>
                        • Eyþór Konráðsson<br> 
                        • Herdís Helga Helgadóttir<br>
                        • Johann Ingi
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