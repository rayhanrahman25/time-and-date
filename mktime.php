<?php
echo time()."\n";
$createGmt =  mktime(0,0,0,8,20,21)."\n";

date_default_timezone_set('Asia/Dhaka');
$AsiaDefault =  mktime(0,0,0,8,20,21)."\n";
$result = ($createGmt - $AsiaDefault)/(60*60);
//echo $result;
$today = mktime(0,0,0,8,20,21);
$FinalExam = mktime(0,0,0,8,30,98);
$daysLeft = ($FinalExam - $today)/(24*60*60);
echo $daysLeft;