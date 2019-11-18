<?php
$date2=date_create("2020-07-08");
$date1=date_create("2019-11-17");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>