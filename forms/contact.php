<?php
   //if "email" variable is filled out, send email   
   
   if (isset($_REQUEST['email']))  {      //Email information   
   $admin_email = "info@horlitech.com";   $email = $_REQUEST['email'];   $subject = $_REQUEST['subject'];   $name = $_REQUEST['name'];
       $comment = $_REQUEST['message']; //send email   
   mail($admin_email, "$subject", $comment, "From:" .$name.' '. $email);     
   
   echo "<script> alert('Message Sent...Thank you for contacting us!');<script>";   
   }       
   
   ?>
