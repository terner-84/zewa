<?php

//Fetch data from MySQL database

$db_table = $_GET['table_name'];

class DataDB {
    public $id;
    public $item;
    public $price;
    public $bought;
}

$arrVals = [];

try {
    $db = new PDO('mysql:host=localhost;dbname=equip_for_ski','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$q = $db->query("SELECT * FROM {$db_table}");
    while ($row = $q->fetch()) {
        $obj = new DataDB();
        $obj->id = $row['buy_id'];
        $obj->item = $row['buy_item'];
        $obj->price = $row['buy_price'];
        $obj->bought = $row['bought'];
        array_push($arrVals, $obj);
    }
    print json_encode($arrVals);
    
} catch (PDOException $e) {
    print "Nelze se připojit k db: " . $e->getMessage();
}

?>