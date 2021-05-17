<?php

function deelbaarDoorDrie($g){
    if($g % 3 == 0){
        echo $g . " is deelbaar door 3";
    } else {
        echo "dit getal is niet deelbaar door 3";
    }
}
/* vul getal in tussen de haakjes */
deelbaarDoorDrie(30303);