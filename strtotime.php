<?php
$handShakeTime =  strtotime("11 december 2020  03:30:00 PM");
echo date('h:i:s A',$handShakeTime)."\n";

date_default_timezone_set('Asia/Dhaka');
$now = strtotime("21 august 2021 11:14 AM");
$birthday = strtotime('11 december 2021 12:00:00 AM');
$calculate =  $birthday - $now;
$daysLeft = ($calculate) / (24*60*60);
echo $daysLeft;

$d1 = new DateTime(' 21 August 2021');
$d2 = new DateTime('11 December 2021');
$difference = date_diff($d1,$d2);
echo $difference->format('%y Year %m Month %d Days %h hour');

