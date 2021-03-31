<?php
class PHP_Email_Form {
    function add_message(){
        $to      = 'ceosscaner@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
    }

    function send(){
        $to      = 'ceosscaner@gmail.com';
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $name = strtr($_POST['name'], " ", "_");

        $headers = 'From: '. $name . "\r\n" .
                    'Reply-To: ' .$_POST['email'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        $success = mail($to, $subject, $message, $headers);
        if ($success == 1) {
            echo "OK";
        }else{
            echo "failed";
        }

   }
}
