<?php
  include ('./scripts/libs/indopisces.inc');
  $ip -> assign ('pgName','Customer Login');
  $ip -> assign ('ctt' , $ip -> fetch('login.tpl'));
  $ip -> display ('base.tpl');
?>