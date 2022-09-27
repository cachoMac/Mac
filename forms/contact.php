<?php
    $error = false;
    $sent = false;

    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])) {
            $error = true;
        }
        else {
            $to = "linardsberzins@gmail.com";

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $comments = trim($_POST['comments']);

            $subject = "Contact Form";

            $message =  "Name: $name \r\n Email: $email \r\n Comments: $comments";
            $headers = "From:" . $name;
            $mailsent = mail($to, $subject, $message, $headers);

            if($mailsent) {
                $sent = true;
            }
        }
    }
?>

<?php if($error == true){ ?>
<p class="error">Text</p>
<?php } if($sent == true) { ?>
<p class="sent">Text</p>
<?php } ?>
<div id="form">
    <form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <h4>Contact Me!</h4>
            <label for="name">Name:</label>
                <input type="text" name="name" id="name"/>
                <label for="email"/>Email:</label>
                <input type="text" name="email" id="email"/>
                <label for="comments" id="comments">Comments:</label>
                <textarea name="comments" id=""></textarea>
                <fieldset>
                <input class="btn" type="submit" name="submit"  class="submit" value="Send email"/>
                <input class="btn" type="reset" value="Reset"/>
                </fieldset>
        </fieldset>
    </form>
</div>




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
