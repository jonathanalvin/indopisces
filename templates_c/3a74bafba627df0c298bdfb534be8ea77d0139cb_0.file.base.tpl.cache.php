<?php /* Smarty version 3.1.27, created on 2015-09-23 12:08:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/indopisces/templates/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2716852656027a2c400ea2_85642524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a74bafba627df0c298bdfb534be8ea77d0139cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/indopisces/templates/base.tpl',
      1 => 1443002910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2716852656027a2c400ea2_85642524',
  'variables' => 
  array (
    'compName' => 0,
    'pgName' => 0,
    'ctt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56027a2c4cdac9_38456853',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56027a2c4cdac9_38456853')) {
function content_56027a2c4cdac9_38456853 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2716852656027a2c400ea2_85642524';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['compName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pgName']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/npm.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    </head>
    
    <body>
        <div id = "main">
            <div id = "menuBar">
                
            </div>
            
            <div class="container">
                <?php echo $_smarty_tpl->tpl_vars['ctt']->value;?>

            </div>
        </div>
    </body>
</html><?php }
}
?>