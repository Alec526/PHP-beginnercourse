<?php

function temperatuur($c){
    $c = ($c * 180) / 100 + 32;
    echo $c." graden fahrenheit";
}
/* vul getal in tussen de haakjes */
temperatuur(56);