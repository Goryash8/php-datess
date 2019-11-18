<?php 
 $date1=date_create("1981-11-04");
 $date2=date_create("2013-09-04");
 $diff=date_diff($date1,$date2);
 echo $diff->format("%Y years %M months %D days");
?>