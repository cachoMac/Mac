<?php
if ( isset ($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST ['subject'];
  $mailFrom = $_POST ['mail'];
  $message = $_POST ['message'];
}
  $mailTo = "cacho.muckey@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from " .$name.".\n\n".$message;

  mail ($mailTo, $subject, $txt, $headers );
  header ("Location: index.php?mailsend ");

 

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // /
?>
