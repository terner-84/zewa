<?php

class Obj {
    public $name;
    public $age;
    public $city;
}

$arrObj = array();

for ($i = 0; $i < 10; $i++) {
    $x = new Obj();
    $x->name = 'Name ' . $i;
    $x->age = 20 + $i;
    $x->city = 'City ' . ($i * 10);
    array_push($arrObj, $x);
}



$text = $_GET['i1'];

try {
    $fce = $_GET['str_fce'];
} catch (Exception $th) {
    $fce = "NIC";
}


switch ($fce) {
    case 'upper':
        print strtoupper($text);
        break;
    case 'lower':
        print strtolower($text);
        break;
    case 'first':
        print ucfirst(strtolower($text));
        break;
    default:
        $myObj = new Obj();
        $myObj->name = "John";
        $myObj->age = 30;
        $myObj->city = "New York";
        array_push($arrObj, $myObj);
        $myJSON = json_encode($arrObj);
        echo $myJSON;
}



/*$res_html = <<<__HTML__
<hmtl>
<head>
</head>
<body>

__HTML__;*/

?>