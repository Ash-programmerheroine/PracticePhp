<?php
$year = 2012;
if ($year % 4 == 0 &&  $year % 100 ==0  &&  $year%400==0)
{
    echo "{$year} is Leap year";
}
elseif ($year % 4 == 0 &&  $year % 100 ==0 ) {
    echo "{$year} is not Leap year";
}
elseif ($year%4==0) {
    echo "{$year} is  Leap year";
}
else{
    echo "{$year} is not Leap year";
}


if ($year % 4 == 0 &&  $year % 100 ==0  || $year%400==0)
{
    echo "{$year} is Leap year";
}
else{
    echo "{$year} is not Leap year";
}