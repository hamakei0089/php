<?php

function calculate($a,$b,$c){
    $total= $a + $b + $c;
    if ($total >= 210 ) {
    echo "合計が" . $total . "なので合格です。";
    }elseif( $total < 209 ) {
        echo "合計が" . $total . "なので不合格です。";
}
}
echo calculate(3,10,200);
