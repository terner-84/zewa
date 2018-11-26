<?php
    class tmr {
        public $name;
        public $cislo;
        public $arr = [];
    }

    class Response {
        public $res;
    }
    $start = time();
    $vals = [];
    for ($i=0; $i < 10000; $i++) { 
        $tmr = new tmr();
        $tmr->name = 'jmeno' . $i;
        $tmr->cislo = 5 * $i;
        
        for ($j=0; $j < 5; $j++) { 
            array_push($tmr->arr, $i * $j * 200);
        }
        array_push($vals, $tmr);
    }
    $end = time();
    $diff = $end - $start;

    $delka = strlen(json_encode($vals));
    $r = new Response();
    $r->res = $delka;


    echo json_encode($r);

?>