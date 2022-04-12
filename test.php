<?php
$n=123;
$r="";

    $x=$n;
    $rev=0;
    $rem;
    while($n>1)
     {
         $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=($n/10);
    }
    $r=$rev;
    echo $r;
?>