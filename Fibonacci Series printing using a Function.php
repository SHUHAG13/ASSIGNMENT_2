<?php
function fibonacciSeries($numOfElement,$first=0,$second=1)
{
    static $start=0;

    
    while($start>=$numOfElement){
        return;
    }
    $start++;
    
    echo"$first\n";
    $_fibo=$first+$second;
    $first=$second;
    $second=$_fibo;
    return fibonacciSeries($numOfElement,$first,$second);
    echo"$start\n";
}
$numberOfElement=15;
fibonacciSeries($numberOfElement);