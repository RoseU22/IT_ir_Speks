<?php

    $serveris = "localhost";
    $lietotajvards = "grobina1_truksans";
    $parole = "CqOdD0zG*";
    $db_nosaukums = "grobina1_truksans";

    $savienojums = mysqli_connect($serveris, $lietotajvards, $parole, $db_nosaukums);

    if($savienojums){
        #echo "Savienojums nav izveidots!";
    }else{
        #echo "Savienojums ar DB veksmīgs!ss"
    }

?>