//Borella Matteo
//esercitazione php

<?php
//inizializzazaione array
$ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240,
18, 72];

//aggiunta array $ping_grezzi
array_push($ping_grezzi, 55, 190, 12);

//variabili
$somma = 0;
$count = 0;
$MAX = 0;
$MIN = 0;
$ping_critici = [];
$ping_Unici = [];
$ping_validi = [];
$pacchetti_persi = 0;

//contaPacchetti_persi accetta un array e restituisce il numero di pac. persi
function contaPacchetti_persi($pacchetti_persi) {
    $pacchetti_persi = 0;
    return $pacchetti_persi;

    foreach($ping_grezzi as $ping) {
        if($ping == -1) {
            $pacchetti_persi;
        }
    }
}
$pacchetti_persi = contaPacchetti_persi($pacchetti_persi);

//contaPacchetti_persi accetta un array e restituisce il numero di pac. NON persi
function contaPacchetti_validi($ping_grezzi) {
    $ping_validi = array();

    foreach($ping_grezzi as $ping) {
        if($ping >0) {
            array_push($ping_validi, $ping);
        }
    }
}

//calcola il ping medio dato da un array
function tempoMedio_risposta($ping_validi){
    $tempoMedio = 0;
    $somma = 0;
    $count = 0;

    foreach($ping_validi as $ping) {
        $count++;
        $somma += $ping;
    }
    $tempoMedio = $somma / $count;
    return round($tempoMedio,2);
}

function calcoloMinMax($ping_validi, &$Min, &$Max) {
    $Min = $ping_validi[0];
    $Max = $ping_validi[0];

    foreach($ping_validi as $ping) {
        if ($ping > $Max ) {
            $Max = $ping;
        }if( $ping < $Min ) {
            $Min = $ping;
        
        }
    }
}
// restituisce un array con ping superiore a 150
function calcolaValori_Critici($ping_validi){
    $valoriCritici = array();

    foreach($ping_validi as $ping) {
        if($ping > 150) {
            array_push($valoriCritici, $ping);
        }
    }
}



/*for ($i = 0; $i < count($ping_grezzi); $i++){
    if($i == -1){
        $pacchetti_persi += 1;
    }else if($i > 0){
        $ping_validi[] = $i;
    }
}*/



/*for($i = 0; $i < count($ping_grezzi); $i++){
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

$ping_Unici[] = array_unique($ping_validi);
$ping_ordinati = array_merge($ping_validi);*/

?>