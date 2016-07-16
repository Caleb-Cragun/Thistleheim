<?php
function calculateFutureValue($amount, $interest, $time, $month){
    $fv = $amount;
    if($month == TRUE){
        $time = $time * 12;
    }
    for($i = 1; $i <= $time; $i++){
        $fv = ($fv + ($fv * $interest *.01));
    }
    return $fv;
}

function currencyFormatting($value){
    return '$'.number_format($value, 2);
}

function percentFormatting($value){
    return $value.'%';
}
?>
