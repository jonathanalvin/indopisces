<?php
    session_start();
    if(isset($sessC)){
        if(!isset($_SESSION["uname"])){
            header('Location: ./login.php');
        }
    }
    require_once ('./scripts/libs/Smarty.class.php');
    $ip = new Smarty();
    $ip->setTemplateDir('./templates/');
    $ip->setCompileDir('./templates_c/');
    $ip->setConfigDir('./configs/');
    $ip->setCacheDir('./cache/');
    $ip->assign ('compName','Indopisces Exotica');
?>