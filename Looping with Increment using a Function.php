<?php
//Using for loop
function isEvenFor($start,$end,$step){
    echo"Print all even numbers from 1 to 20 using for loop:\n ";
    for($i=$start+1;$i<=$end;$i=$i+$step){
        echo$i."\n";
    }    
    
}
isEvenFor(1,20,2);

//Using while loop
function isEvenWhile($start,$end,$step){
    echo"Print all even numbers from 1 to 20 using while loop:\n ";
 $i=$start+1;
 while($i<=$end){
    echo"$i\n";
    $i=$i+$step;
 }

}
isEvenWhile(1,20,2);

//Using  do while loop
function isEvenDoWhile($start,$end,$step){
    echo"Print all even numbers from 1 to 20 using Do while loop:\n ";
    $i=$start+1;
    do{
       echo"$i\n";
         $i=$i+$step;
    }while($i<=20);

}
isEvenDoWhile(1,20,2);
