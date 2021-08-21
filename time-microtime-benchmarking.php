<?php
 echo time(); // i can get seconds who running form 1997 january 00:00 to  till now 
// unix epoch
// unix timestamp

// =============== date() ==================
echo date('D/M/Y'); //============ you can you lowercase and uppercase that showing you two different views

//================== microtime() =============
$mt =  microtime('true');
printf('%10.8f',$mt);

 
function factorial($n){
    $result = 1;
    for($i=1; $i<=$n; $i++){
     $result*=$i;
    }
    return $result; 
}

$startTime = microtime('true');
factorial(100);
$endTime = microtime('true');
$totalExecution = $endTime - $startTime;

printf('%10.8f',$totalExecution);