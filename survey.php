<?php

  session_start();

  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/SMTP.php';

  $adSoyad = isPost('adSoyad');
  $sirketMail = isPost('sirketMail');

    if (!empty($_POST['musterikod']) && !empty($_POST['firma']) && !empty($_POST['unvan']) && !empty($_POST['sicilno'])) {

    SendEinstein();
    SendCustomer($adSoyad, $sirketMail);

    } else {
    echo 'false';
   }

   function isPost($name) {
     if (isset($_POST[$name]) && is_array($_POST[$name])) { $v = $_POST[$name]; return $v[0]; }
     return isset($_POST[$name]) ? $_POST[$name] : '';
   }

  function SendEinstein() {
    /*$musterikod = $_POST['musterikod'];
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
    $cepTelefonAlternative = $_POST['cepTelefonAlternative'];*/

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
    $mail->Password		= '@E1114192059n';
    $mail->Port			= '587';
    $mail->SMTPDebug	= 0;
    $mail->SMTPAutoTLS  = false;
    $mail->SMTPAuth 	= true;
    $mail->SMTPSecure	= 'tls';
    if(empty($_SESSION["default"])){
      $mail->Subject = 'Demo Hesap Talep Formu';
    }
    else{
      $mail->Subject 	= 'LMS Kayıt Formu';
    }

    $mail->addAddress( 'destek@einstein.com.tr',  'Einstein');
    $mail->addAddress( 'ahmet.cingoz@einstein.com.tr', 'Einstein' );
    $mail->addAddress( 'rabia.cekmez@einstein.com.tr', 'Einstein' );

    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $url = __DIR__ . '/PHPMailTemplate/success.php';
    $body = file_get_contents( $url, true);
    /*foreach ($_POST as $key => $value) {
      $body = str_replace("{$key}", $value, $body);
    }*/

    $mail->msgHTML(
     //$body
     "<p>Ad Soyad : ".isPost('musterikod')." </p>
      <p>Firma : ".isPost('firma')." </p>
      <p>Ünvan : ".isPost('unvan')." </p>
      <p>Sicil No : ".isPost('sicilno')." </p>
      <p> Ulke : ".isPost('ulke')." </p>
      <p> Domain : ".isPost('domain')." </p>
      <p> Web Adresi : ".isPost('webadress')." </p>
      <p> Şirket Telefon Numarası : ".isPost('sirketTelefon')." </p>
      <p> Şirket Maili : ".isPost('sirketMail')."  </p>
      <p> Alternatif Şirket Maili : ".isPost('sirketMailAlternative')." </p>
      <p> Yetkili Adı-Soyadı: ".isPost('adSoyad')." </p>
      <p> Cinsiyet : ".isPost('q1')." </p>
      <p> İrtibat Numarası : ".isPost('cepTelefon')." </p>
      <p> Alternatif İrtibat Numarası : ".isPost('cepTelefonAlternative')." </p>"
    );

    if (!$mail->Send()) {

      echo 'false';

     } else {

      echo 'true';

    }
  }

  function SendCustomer($adsoyad, $eposta) {

      $mail = new PHPMailer\PHPMailer;

      $mail->IsSMTP();
      $mail->CharSet		= 'utf-8';
      $mail->ContentType 	= 'text/html';
      $mail->From     	= 'destek@einstein.com.tr';
      $mail->FromName 	= 'Einstein';
      $mail->addReplyTo('destek@einstein.com.tr', 'Einstein');
      $mail->Encoding     = 'base64';
      $mail->Host     	= 'smtp.office365.com';
      $mail->Username		= 'destek@einstein.com.tr';
      $mail->Password		= '@E1114192059n';
      $mail->Port			= '587';
      $mail->SMTPDebug	= 0;
      $mail->SMTPAutoTLS  = false;
      $mail->SMTPAuth 	= true;
      $mail->SMTPSecure	= 'tls';
      if(empty($_SESSION["default"])){
        $mail->Subject = 'Demo Hesap Talep Formu';
      }
      else{
        $mail->Subject 	= 'LMS Kayıt Formu';
      }
      $mail->addAddress($eposta, $adsoyad);

      $mail->SMTPOptions = array('ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
      );

      $url = __DIR__ . '/PHPMailTemplate/success.php';
      $body = file_get_contents( $url, true);
      foreach ($_POST as $key => $value) {
        $body = str_replace("{{$key}}", $value, $body);
      }

      $mail->msgHTML(
        $body
        /*"<h3>Zaman Ayırdığınız İçin Teşekkür Ederiz!</h3>
        <p>Anketimize katılarak vermiş olduğunuz dürüst bilgiler ve önerileriniz sizlerin istek ve ihtiyaçlarınızı
        daha iyi anlayabilmemiz adına bizler için çok değerli. Einstein’a kattıklarınız için teşekkür ederiz.</p>"*/
      );

      if (!$mail->Send()) {
          die($mail->ErrorInfo);
          return false;
      } else { return true; }

  }



     ?>
