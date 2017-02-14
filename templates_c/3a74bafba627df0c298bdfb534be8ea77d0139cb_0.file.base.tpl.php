<?php /* Smarty version 3.1.27, created on 2016-09-18 04:45:24
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/indopisces/templates/base.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:80630522757ddffc4190831_97520082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a74bafba627df0c298bdfb534be8ea77d0139cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/indopisces/templates/base.tpl',
      1 => 1474166719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80630522757ddffc4190831_97520082',
  'variables' => 
  array (
    'compName' => 0,
    'pgName' => 0,
    'ctt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ddffc41dc023_94249834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ddffc41dc023_94249834')) {
function content_57ddffc41dc023_94249834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80630522757ddffc4190831_97520082';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title><?php echo $_smarty_tpl->tpl_vars['compName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pgName']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
-->
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/npm.js"><?php echo '</script'; ?>
>
    </head>
    
    <body>
        <div class = "container mCont">
            <div class="row mHdr">
                <div class="col-md-10">
                    <ul class="topMenu">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about.php">About Us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                <?php if (!isset($_SESSION['fullName'])) {?>
                    <a href="./login.php">Login</a>
                <?php } else { ?>
                    <a href="./member.php">Hi, <?php echo $_SESSION['fullName'];?>
</a>
                <?php }?>
                </div>
            </div>
            
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container fluid">
                        <div class="navbar header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Indopisces</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
            
            <div class="row mLand">
                <?php echo $_smarty_tpl->tpl_vars['ctt']->value;?>

            </div>
            
            <div class="row footer">
                <div class="col-md-5">
                    About INDOPISCES EXOTICA (COPY FROM WEB)
                </div>
                <div class="col-md-5">
                    
                </div>
                <div class="col-md-2">
                    TEST SIZE
                </div>
                <div class="col-md-12 copyRight">
                    Copyright <sup>&copy;</sup> Indopisces Exotica. All rights reerved.
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
?>