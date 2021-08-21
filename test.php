<?php
$something = mktime(0,0,0, 8,20,21);
$hello2 = $something / (60*60);
date_default_timezone_set('Asia/Dhaka');
$something3 = mktime(0,0,0, 8,20,21);
$hello3 = $something3/(60*60);


echo $hello2."\n";
echo $hello3;