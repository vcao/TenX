<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('noreply@ten-x.com', 'Ten-X');
//Set an alternative reply-to address
$mail->addReplyTo('noreply@ten-x.com', 'No Reply at Ten-X');
//Set who the message is to be sent to
$mail->addAddress('victortcao@gmail.com', 'Victor Cao');
//Set the subject line
$mail->Subject = 'Exciting Value-Add Retail Opportunity - New York';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('tenxdemo.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
