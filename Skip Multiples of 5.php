<?php
function printSeries($start,$end)
{
    echo"prints numbers from 1 to 50:\n";
    for($i=$start;$i<=$end;$i++)
    {
        if($i%5==0){
            continue;
        }
        else{
            echo"$i ";
    
        }
        
    }
}

printSeries(1,50);