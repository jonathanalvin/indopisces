<?php
    include ('./scripts/libs/indopisces.inc');
    $ip -> assign ('pgName','Welcome');
    $ip -> assign ('ctt' , $ip -> fetch('about.tpl'));
    $ip -> display ('base.tpl');
?>