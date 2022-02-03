<?php
// Naming Constant
define( "RECIPIENT_NAME", "Mohammad Mostofa" );
define( "RECIPIENT_EMAIL", "mostofa.mm9989@mail.com" );
// Values
$success = false;
$Name = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$Email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "",
$_POST['message'] ) : "";

// Send the email
if ( $Name && $Email && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $Name . " <" . $Email . ">";
  $success = mail( $recipient, $subject, $message, $headers );
  $msg = "<p>Sent Your Message Successfully.</p><p>Thank You $Name For Your Message.</p></p>";
  //Set Location
  header("Location: index.php?msg=".urlencode("$msg"));
}
?>