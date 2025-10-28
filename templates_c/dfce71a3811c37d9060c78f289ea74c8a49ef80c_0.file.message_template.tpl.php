<?php
/* Smarty version 4.3.4, created on 2025-10-28 21:28:05
  from 'C:\xampp\htdocs\LAB6\templates\message_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_69012755838646_13917036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfce71a3811c37d9060c78f289ea74c8a49ef80c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LAB6\\templates\\message_template.tpl',
      1 => 1761683277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69012755838646_13917036 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>

   <?php if ($_smarty_tpl->tpl_vars['message_type']->value == 1) {?>
      <title>Registration Complete</title>
      <meta http-equiv="refresh" content="20" />
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['message_type']->value == 2) {?>
      <title>Goodbye page</title>       
      <meta http-equiv="refresh" content="10" />
   <?php }?>
  </head>
  <body>
   <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

  </body>
</html><?php }
}
