<?php

  session_start();

  // put full path to Smarty.class.php
require('/usr/share/php/smarty-4.3.4/libs/Smarty.class.php'); //smarty.class
  $smarty = new Smarty();

  $smarty->template_dir = 'templates';
  $smarty->compile_dir = 'templates_c';
  unset($_SESSION['message']);
  if ($_SESSION['message_type'] == 1 ) {   
    $message="<p><strong>User registration successful!</strong></p>";
        $message=$message . "  you just provided in your login form.
      <br />
      If you are not redirected to the Login page in the next 20 seconds,
      click <a href=\"index.php\">here</a>.</p>";


      $smarty->assign('message', $message);
        $smarty->assign('message_type', $_SESSION['message_type']);
  }

  if ($_SESSION['message_type'] == 2 ) {
    setcookie('PHPSESSIONID', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    $message="<h1>Thank you for your visit</h1>
      <p>To log in again click <a href=\"login.php\">here</a>.</p>";

    $smarty->assign('message', $message);
    $smarty->assign('message_type', $_SESSION['message_type']);
      session_destroy();

  }


  // Actualiza o template
  $smarty->display('./templates/message_template.tpl');
 
?>