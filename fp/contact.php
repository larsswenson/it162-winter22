<?php
include "includes/header.php";?>

<div class="form">
  <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "lars.swenson@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Alejandro Ulloa"; //place your client's name here
        $website = "Alejandro Ulloa Hair";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
        ?>
        </div>
        <?php include "includes/footer.php";
	?>