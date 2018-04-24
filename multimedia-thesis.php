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
     <div id="iPageProject4" class="page">
        <div class="banner-container">
            <div class="banner-text">
                <h2>Multimedia Thesis</h2>
            </div>
        </div>
        <div class="project-container col col-md-6 ml-auto">
            <h3>Bitchslap Magazine</h3>
            <div class="paragraf-text">
                <div class="text"> 
                    <p>
                        Bitchslap Magazine is a street magazine and was our case study for our multimedia thesis. Our thesis dealt with: 
                        “How can we present Bitchslap Magazines online articles in a more engaging and graphically interesting way for their narrow audience?”
                    </p>
                    <p>
                       We concluded that Bitchslap should improve upon their strengths, with highly appealing articles about subjects they are passionate about.
                       The most effective way to execute this was by investing effort into setting up a few long-form articles on their website and heavily 
                       promoting their content on social media. These long-form articles should improve the user experience from “usable” to “pleasurable”, 
                       as well as raise the brand value with higher SEO-rankings and more shares.
                    </p>   
                    <p>
                        Signaling this new approach to online publishing, we implemented a redesign of their entire website, drawing 
                        inspiration from zine culture and Bitchslap’s origin as a handmade magazine reproduced with xerox printers.
                    </p>
                </div>
            </div>
            <div class="image-container">
                <img src="img/multimedia-thesis/styletile_website.jpg">
            </div>
            <div class="paragraf-text">
                <div class="text"> 
                        <p> 
                            To kick the redesign off, we conducted a follow-up interview of the creator of AFUK SKATE, 
                            to experiment with different storytelling formats: 
                            video backgrounds, stylized images, highlighted quotes, and two promotional videos to use on social media.
                            We turned these formats into modules the writers easily could implement and modify to their needs through Visual 
                            Composer as they set up articles on Wordpress. To test the versatility of these modules, we re-published two older articles 
                            that could benefit from a more engaging set-up.
                        </p>  
                </div>
            </div>
            <div class="image-container">
                <img src="img/multimedia-thesis/screenshot2.png">
                <img src="img/multimedia-thesis/screenshot1.png">
                <img src="img/multimedia-thesis/screenshot3.png">
            </div>
            <h4>Video content for the AFUK article</h4>
            <div id="video">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/QR5kCMr65u4" frameborder="0" allowfullscreen></iframe>
            </div>
            <div id="video">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/I35s3JAgU5Q" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="additional-info">
                <div class="programs">
                    <h4>Programs</h4>
                    <p>
                        • HTML/CSS
                        <br>• Wordpress
                        <br>• Photoshop / Illustrator 
                        <br>• Premiere pro 
                    </p>
                </div>
                <div class="collaboration">
                    <h4>Collaboration</h4>
                    <p>
                        • Laura Kongaa Møller<br> 
                        • Aleksander Samuel
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