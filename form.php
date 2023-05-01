<?php

  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/SMTP.php';

  $ahmet = 'ahmet.cingoz@einstein.com.tr';
  $furkan = 'furkan.bayat@einstein.com.tr';
  $enver = 'enver.yasar@einstein.com.tr';

/*$secret = "6LeZKt0UAAAAAEeD80Z6LKbkL2U4zI4LE1W7cjZw";
  $response = $_POST["g-recaptcha-response"];
  $remoteip = $_SERVER['REMOTE_ADDR'];

  $url = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $response . '&remoteip=' . $remoteip);
  $result = json_decode($url, TRUE);*/



  /*if ($result['success'] == 'true') {*/
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['service']) && !empty($_POST['message'])) {

          $ad = $_POST['name'];
          $soyad = $_POST['surname'];
          $email = $_POST['email'];
          $konu = $_POST['subject'];
          $hizmet = $_POST['service'];
          $mesaj = $_POST['message'];

          $mail = new PHPMailer\PHPMailer;

          $mail->IsSMTP();
          $mail->CharSet		= 'utf-8';
          $mail->ContentType 	= 'text/html';
          $mail->From     	= 'destek@einstein.com.tr';
          $mail->FromName 	= 'egitim360';
          $mail->addReplyTo('destek@einstein.com.tr', 'Einstein');
          $mail->Encoding     = 'base64';
          $mail->Host     	= 'smtp.office365.com';
          $mail->Username		= 'destek@einstein.com.tr';
          $mail->Password		= '@112610t';
          $mail->Port			= '587';
          $mail->SMTPDebug	= 0;
          $mail->SMTPAutoTLS  = false;
          $mail->SMTPAuth 	= true;
          $mail->SMTPSecure	= 'tls';
          $mail->Subject 		= 'İletişim Formu';
          $mail->addAddress( $ahmet );

          $mail->SMTPOptions = array('ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
              )
          );

          $mail->msgHTML(
            "<p>Ad : $ad</p>
             <p>Soyad : $soyad</p>
             <p>E-Posta : $email</p>
             <p>Konu : $konu</p>
             <p>Hizmet : $hizmet</p>
             <p>Mesaj : $mesaj</p>
            "
          );

          if (!$mail->Send()) {

            echo 'false';

           } else {

            echo 'true';

          }

      } else {

      echo 'false';

     } ?>
