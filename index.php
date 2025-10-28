<?php

include 'db.php';
include_once 'Posts2_model.php';

// Connect to database
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
session_start();
// put full path to Smarty.class.php
require_once('C:\xampp\php\lib\smarty-4.3.4\libs\Smarty.class.php'); //smarty.class
$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');


// get posts
$posts = get_posts($db);

// faz a atribui��o das vari�veis do template smarty
$smarty->assign('posts',$posts);

$user_data = [];

if (isset($_COOKIE['PHPSESSIONID'])) {
    $cookie_data = json_decode($_COOKIE['PHPSESSIONID'], true);
    if (is_array($cookie_data)) {
        $user_data = $cookie_data;
    }
}
$smarty->assign('user_data', $user_data);

// Mostra a tabela
$smarty->display('./templates/Posts2_Smarty.tpl');

