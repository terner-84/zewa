<?php

    $times = date_timestamp_get(date_create());
    

    $vysledky = array();

    function fact($x) {
        $return = 1;
        for ($i=$x; $i >= 1; $i--) {
            $return = $return * $i;
        }
        return $return;
    }

    function fce_n($num) {
        $pole = [];
        for ($i=1; $i < 3; $i++) { 
            $out = pow(fact($i) / pow($i, $i), 1/$i);
            array_push($pole, number_format($out, 2, ',', ' '));
        }
        return $pole;
    }

    /*
    for ($i=0; $i < 5; $i++) { 
        array_push($vysledky, fact($i + 1));
    }*/

    $vysledky = fce_n(5);

    array_push($vysledky,md5('hello'));
    echo json_encode($vysledky);

?>