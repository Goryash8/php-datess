<?php
$to_date = strtotime("2014-01-01"); // Input your date here e.g. strtotime("2014-01-02")
$from_date = strtotime("2014-12-31");
$day_diff = $from_date - $to_date;
echo floor($day_diff/(60*60*24*7))."\n";
?>