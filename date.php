<?php
echo date('d/m/y') ;
echo date('D/M/Y') ;
echo date('dS F, Y'); // S means th, st this kinda syntax and F means full name of month
date_default_timezone_set('Asia/Dhaka');
echo date('dS F, Y h:i:s A',time()+24*60*60); // if you write h small letter you'll get 12 hour format but if you write Capital H thsi will show you 12 hour format
echo "\n";
echo date('t'); 
echo "\n";
echo date('z'); // if we wanna print count actual day in this year
