<?php

/*
Make table
$q = $db->exec("CREATE TABLE buys (
        buy_id INT AUTO_INCREMENT,
        buy_item VARCHAR(100),
        buy_price DECIMAL(6,2),
        buy_count INT
    )");
*/

$m_item = $_GET['item'];
$m_price = floatval($_GET['price']);
$m_count = intval($_GET['count']);
$m_bought = boolval($_GET['bought']);
print $m_item;
print '<br>';



try {
    $db = new PDO('mysql:host=localhost;dbname=equip_for_ski','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = $db->query("SELECT * FROM buys");
    
    $stmt = $db->prepare("INSERT INTO buys (buy_item, buy_price, buy_count, bought) 
                    VALUES (?, ?, ?, ?)");
    $stmt->execute(array($m_item, $m_price, $m_count, $m_bought));
    print "Úspešně vloženo";
    print '<br><a href="index.html">Domů</a>';
    //print '<br>' . mb_detect_encoding($m_item);
} catch (PDOException $e) {
    print "Nelze se připojit k db: " . $e->getMessage();
}



?>