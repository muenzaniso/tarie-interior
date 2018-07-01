<?php 
$fourMonths = 60*60*24*120+ time();//seconds*minutes*hours*days + currenttime
setcookie('lastVisit', date("h:i:s m/d/y"), $fourMonths,'/');
 ?>
 