<?php /* Smarty version 3.1.27, created on 2017-02-15 00:53:51
         compiled from "/home/cabox/workspace/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133577258658a3ecef6fe027_22365578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc15d9b5f0acdbc703a4740c5f9ac8e3c5201d7' => 
    array (
      0 => '/home/cabox/workspace/templates/login.tpl',
      1 => 1487138024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133577258658a3ecef6fe027_22365578',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a3ecef705817_39358745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a3ecef705817_39358745')) {
function content_58a3ecef705817_39358745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133577258658a3ecef6fe027_22365578';
?>
<div class="container">
    <div class="col-md-12">
      <form name="frmLgn" id="frmLgn" method="POST" action="#">
        Username <input type="text" name="txtUser" placeholder="Enter username">
        Password <input type="password" name="txtPass" placeholder="Enter username">
        <button type="submit">Login</button>
      </form>
    </div>
</div><?php }
}
?>