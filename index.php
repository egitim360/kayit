<?php

if (session_status() !== PHP_SESSION_ACTIVE) {

  session_start();

  ob_start();

  date_default_timezone_set('Europe/Istanbul');
  ini_set('default_charset', "utf-8");

  include_once 'views/default.php';

  ob_end_flush(); }

?>
