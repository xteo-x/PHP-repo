//Borella Matteo
//esercitazione php

<?php
//inizializzazaione array
$ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240,
18, 72];

array_push($ping_grezzi, 55, 190, 12);

$ping_validi = [];
$pacchetti_persi = 0;

for ($i = 0; $i < count($ping_grezzi); $i++){
    if($i == -1){
        $pacchetti_persi += 1;
    }else if($i > 0){
        $ping_validi[] = $i;
    }
}

$somma = 0;
$count = 0;
$MAX = 0;
$MIN = 0;
$ping_critici = [];

for($i = 0; $i < count($ping_grezzi); $i++){
    $somma += $ping_grezzi[$i];
    if($ping_grezzi[$i] > $MAX){
        $MAX = $ping_grezzi[$i];
    }else if($ping_grezzi[$i] < $MIN){
        $MIN = $ping_grezzi[$i];
    }else if($ping_grezzi[$i] >= 150){
        $ping_critici[] = $i;
    }
    $count ++;
}
$media = $somma / $count;

?>