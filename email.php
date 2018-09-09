<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>email</title>
  </head>
  <body>
    <form class="" action="email.php" method="POST">
      to:<input type="text" name="recipient" value="">
      <br>
    subject:<input type="text" name="subject" value="">
    <br>
      Mail body:
      <textarea name="message" rows="8" cols="40"></textarea>
      <br>
      <input type="button" name="submit" value="submit">
    </form>
    <?php
   //  var_dump($result);
//      $recipient=$_POST['recipient'];
//      $subject=$_POST['subject'];
//      $mail_body=$_POST['message'];
//      $headers=implode("\r\n",
//               "From: John Conde <webmaster@example.com>",
//                 "Reply-To: webmaster@example.com",
//                 "X-Mailer: PHP/" . PHP_VERSION,
//                 "MIME-Version: 1.0",
//                 "Content-Type: text/html; charset=UTF-8"
// );
//
//       $result = mail($recipient, $subject, $mail_body, $headers );
//        var_dump($result);
        if (isset($_POST['submit'])) {

      require 'PHPMailerAutoload.php';

      $mail = new PHPMailer;

      //$mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'user@example.com';                 // SMTP username
      $mail->Password = 'secret';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom('from@example.com', 'Mailer');
      $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
      $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('info@example.com', 'Information');
      $mail->addCC('cc@example.com');
      $mail->addBCC('bcc@example.com');

      $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Here is the subject';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }
        }
     ?>
  </body>
</html>
