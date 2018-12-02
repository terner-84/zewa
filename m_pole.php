<?php
    $valik = $_GET['spec'];

    if (strlen($valik) > 0 && strstr($valik, 'lbl')) {
        $c1979 = [
            'lblNazev' => 'Algoritmy v jazyku C a C++',
            'lblCena' => 'Kolik zaplatíte',
            'lblPocet' => 'Počet vybraných položek',
            'lblKoupeno' => 'Zdali již vlastníte nebo ne, vy matlové'
        ];
        echo json_encode($c1979);
    } else {
        $m_arr = [
            'alpha' => 'Python 3',
            'beta' => 'C#',
            'bravo' => 'Oracle Database 11g',
            'java' => 'Java the Precious'
        ];
        echo json_encode($m_arr);
    }


    
?>