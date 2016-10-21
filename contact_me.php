<?php
if(isset($_POST['submit'])){
   $to = "gompavamsikrishna@gmail.com"; // this is your Email address
   $from = $_POST['email']; // this is the sender's Email address
   $first_name = $_POST['name'];
   //$last_name = $_POST['last_name'];
   $subject = "Form submission for Uniq Vizag";
   $subject2 = "Copy of your form submission for Uniq Vizag";
   $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
   $message2 = "Hello " . $first_name . ".\n\nHere is a copy of your message from Uniq Vizag Contact us form:\n\n" . $_POST['message'] . "\n\nRegards,\nUniq Vizag";

   $headers = "From:" . $from;
   $headers2 = "From:" . $to;
   mail($to,$subject,$message,$headers);
   mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
   echo("<script>alert('Mail sent successfully!')</script>");
   echo("<script>window.location = 'index.html';</script>");
   // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>