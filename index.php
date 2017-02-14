<?php
    include ('./scripts/libs/indopisces.inc');
    $ip -> assign ('pgName','Welcome');
    $ip -> assign ('ctt' , $ip -> fetch('index.tpl'));
    $ip -> display ('base.tpl');
?>