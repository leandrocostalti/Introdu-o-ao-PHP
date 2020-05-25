<?php
    $cond_A = 2;
    $cond_B = 16;

    if($cond_A>$cond_B){
        echo "<h2>Verdadeiro</h2>";
    }else if(($cond_B>6) && ($cond_B<15)){
        echo "<h2>O valor de B esta entre 6 e 15</h2>";
    }else{
        echo "<h2>Falso</h2>";
    }
