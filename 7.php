<?php 
$date1=date_create("2019-10-10");
$date2=date_create("2019-12-12");
$date=date_diff($date1,$date2);
echo $date->format("%D days") ;
?>