<?php

  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/SMTP.php';

  $ahmet = 'ahmet.cingoz@einstein.com.tr';
  $furkan = 'furkan.bayat@einstein.com.tr';
  $enver = 'enver.yasar@einstein.com.tr';

    if (!empty($_POST['musterikod']) && !empty($_POST['firma']) && !empty($_POST['unvan']) && !empty($_POST['sicilno'])) {

          $musterikod = $_POST['musterikod'];
          $firma = $_POST['firma'];
          $unvan = $_POST['unvan'];
          $sicilno = $_POST['sicilno'];
          $ulke = $_POST['ulke'];
          $domain = $_POST['domain'];
          $webadress = $_POST['webadress'];
          $sirketTelefon = $_POST['sirketTelefon'];
          $sirketMail = $_POST['sirketMail'];
          $sirketMailAlternative = $_POST['sirketMailAlternative'];
          $adSoyad = $_POST['adSoyad'];
          $q1 = $_POST['q1'];
          $departman = $_POST['departman'];
          $gorevi = $_POST['gorevi'];
          $cepTelefon = $_POST['cepTelefon'];
          $cepTelefonAlternative = $_POST['cepTelefonAlternative'];

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
          $mail->Subject 		= 'LMS Kayıt Formu';
          $mail->addAddress( 'enver.yasar@einstein.com.tr', 'Einstein' );

          $mail->SMTPOptions = array('ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
              )
          );
          /*$body = file_get_contents( __DIR__ );
          foreach ($_POST as $key => $value) {
            $body = str_replace("{$key}", $value, $body);
          }*/

          $mail->msgHTML(
           "<p>Ad Soyad : $musterikod</p>
          	<p>Firma : $firma </p>
            <p>Ünvan : $unvan </p>
            <p>Sicil No : $sicilno </p>
            <p> Ulke : $ulke</p>
            <p> Domain : $domain</p>
            <p> Web Adresi : $webadress </p>
            <p> Şirket Telefon Numarası : $sirketTelefon </p>
            <p> Şirket Maili : $sirketMail  </p>
            <p> Alternatif Şirket Maili : $sirketMailAlternative </p>
            <p> Yetkili Adı-Soyadı:  $adSoyad </p>
            <p> Cinsiyet : $q1 </p>
            <p> Depatman : $departman </p>
            <p> Görevi :  $gorevi </p>
            <p> İrtibat Numarası :  $cepTelefon </p>
            <p> Alternatif İrtibat Numarası : $cepTelefonAlternative </p>"
          );

          if (!$mail->Send()) {

            echo 'false';

           } else {

            echo 'true';

          }

      } else {

      echo 'false';

     } ?>
