<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ceosscaner@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( '¡No se puede cargar la biblioteca "Formulario de correo electrónico PHP"!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  /*$contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  $contact->message = $_POST['message'];
  
  $contact->add_message( $receiving_email_address, 'To');
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['subject'], 'subject');
  $contact->add_message( $_POST['message'], 'Message', 10);*/

  echo $contact->send();
/*$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$header = "Enviado desde ERO SCAN";
$mensajeCompleto = $mensaje . "\n Atentamente:" . $nombre . "\n Email: " . $email;

mail($receiving_email_address, $asunto, $mensajeCompleto, $header);
*/
?>
