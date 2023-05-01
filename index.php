<?php

if (session_status() !== PHP_SESSION_ACTIVE) {

  date_default_timezone_set('Europe/Istanbul');
  ini_set('default_charset', "utf-8");

  session_start();
  ob_start();

  if (!isset($_GET['page'])) { $page = 'section';} else { $page = $_GET['page']; };

  include_once 'views/pages/function.php';

 ?>

  <!doctype html>
  <html>

  <?php include 'views/layout/head.php'; include_once 'views/pages/default.php'; ?>

  </html>

  <?php ob_end_flush(); } ?>
