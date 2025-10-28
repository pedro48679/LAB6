<?php

session_start();

// put full path to Smarty.class.php
require('/usr/share/php/smarty-4.3.4/libs/Smarty.class.php'); //smarty.class
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

      
  if (isset($_GET['m'])) {       
    if ($_GET['m'] == "1") {$smarty->assign('MESSAGE', 'One or more required fields were left blank or are invalid. Please fill them in and try again.');}
      if ($_GET['m'] == "2") {$smarty->assign('MESSAGE', 'A user already exists with your chosen userid. Please try another.');}
  }
  else
    {$smarty->assign('MESSAGE', '');}

  if (isset($_SESSION['username']))
    $smarty->assign('username', $_SESSION['username']);
  else
    $smarty->assign('username', '');

  if (isset($_SESSION['email']))
    $smarty->assign('email', $_SESSION['email']);
  else
    $smarty->assign('email', '');

  if (isset($_SESSION['password']))
    $smarty->assign('password', $_SESSION['password']);
  else
    $smarty->assign('password', '');

  if (isset($_SESSION['confirm_password']))
    $smarty->assign('confirm_password', $_SESSION['confirm_password']);
  else
    $smarty->assign('confirm_password', '');

  if (isset($_SESSION['errors'])) {
    $smarty->assign('errors', $_SESSION['errors']);
    unset($_SESSION['errors']); // clear them after showing
  } else {
      $smarty->assign('errors', []);
  }

  $register_data = [];

  if (isset($_COOKIE['PHPSESSIONID'])) {
      $cookie_data = json_decode($_COOKIE['PHPSESSIONID'], true);
      if (is_array($cookie_data)) {
          $register_data = $cookie_data;
      }
  }
  $smarty->assign('register_data', $register_data);

  // Actualiza o template
  $smarty->display('./templates/register_template.tpl');
 
?>