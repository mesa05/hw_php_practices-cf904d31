<?php
    $number = 0;
    $narcissisticNumber = 0;
    for ($i = 100 ; $i <= 999 ; $i++) {
        $narcissisticNumber = 0;
        for($j = 0 ; $j <= 2 ; $j++) {
            $number = substr("$i",$j,1);
            $narcissisticNumber += ($number*$number*$number);
        }
        if($narcissisticNumber == $i){
            echo $narcissisticNumber."<br>";
        }
    }
?>