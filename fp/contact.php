<!DOCTYPE html>
<html lang="en">
 <head>
  <title>KJ Jones' Content Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/kastest.css" />
  <link rel="stylesheet" href="css/kasnav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1><a href="template.html">Cooking With Chocolate</a></h1>
     <!-- drop down for toggle menu pages -->
      <div class="hamburger-button" type="button" value="Show DIV" id="bt" onclick="toggle(this)">
            <button class="toggle_button">
                <div class="toggle_button_line"></div>
                <div class="toggle_button_line"></div>
                <div class="toggle_button_line"></div>
            </button>
      </div> 

    <!-- drop down for toggle menu pages -->
      <div class="toggle-menu" style=" padding:10px;" id="cont">
        <ul>
         <li><a href="template.html">HOME</a></li>
         <li><a href="food.html">FOOD</a></li>
         <li><a href="drink.html">DRINK</a></li>
         <li><a href="music.html">MUSIC</a></li>
         <li><a href="contact.php" class="active">CONTACT</a></li>
        </ul>
      </div>
      <div class="separator-line"></div>
     </header>
     
   <div class="wrapper">
      <h2 class="subheader">Contact KJ</h2>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kajae75@gmail.com";  //place your/your client's email address here
        $toName = "KJ"; //place your client's name here
        $website = "Cooking With Chocolate ";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
         
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Contact KJ</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- START js script for toggle menu -->

<script>
    /*function for toggle menu*/
  function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = 'Show DIV';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = 'Hide DIV';
        }
    }
     
</script>  
     
 </body>
</html>