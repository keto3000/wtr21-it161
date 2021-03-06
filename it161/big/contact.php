<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Keith Scarmato's Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/big.css" />
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="./css/forms.css"/>
 </head>
 <body>
     <header>
     <h1>Keith Scarmato: Contact Form</h1>
     <nav id="cssmenu">
          <ul>
             <li><a href="../index.html"><i class="fa fa-fw fa-institution" aria-hidden="true"></i> WEB161</a></li>
             <li><a href="index.html"><i class="fa fa-fw fa-home" aria-hidden="true"></i> BIG Website</a></li>
             <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro" aria-hidden="true"></i> Lightbox II Gallery</a></li>
              <!-- drop down for research topics pages -->
             <li><a href="#"> Research Topics</a>
                <ul>
                    <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up" aria-hidden="true"></i> SMO</a></li>
                    <li><a href="accessibility.html"><i class="fa fa-fw fa-globe" aria-hidden="true"></i> Accessibility</a></li>
                    <li><a href="forms.html"><i class="fa fa-fw fa-desktop" aria-hidden="true"></i> Web Forms</a></li>
                </ul>
             </li>
             <!-- drop down for google tool pages -->
             <li><a href="#"> Google Tools</a>
                <ul>
                   <li><a href="seo.html"><i class="fa fa-fw fa-desktop" aria-hidden="true"></i> SEO</a></li>
                   <li><a href="calendar.html"><i class="fa fa-fw fa-calendar" aria-hidden="true"></i> Calendar</a></li>
                   <li><a href="map.html"><i class="fa fa-fw fa-map-o" aria-hidden="true"></i> Map</a></li>
                </ul>
            </li>
            <li><a href="contact.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Contact me</a></li>
          </ul>
</nav>
     </header>
     
   <div class="wrapper">
      <h2 class="subheader">Contact Keith</h2>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "keith.scarmato@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Keith"; //place your client's name here
        $website = "BIG Website Contact Form ";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
         
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Contact Keith</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>