<?php

$m_item = $_GET['item'];
$m_price = floatval($_GET['price']);
$m_count = intval($_GET['count']);
$m_bought = boolval($_GET['bought']);
print $m_item;
print '<br>';

/*
$mysqli = new mysqli("localhost", "root", "", "equip_for_ski");
    
  // check connection
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  }
    
  // change character set to utf8
  if (!$mysqli->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $mysqli->error);
  } else {
      printf("Current character set: %s\n", $mysqli->character_set_name());
  }
    
  $mysqli->close();
  */

try {
    $db = new PDO('mysql:host=localhost;dbname=equip_for_ski','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $db->prepare("INSERT INTO ski (item, price, bought) 
                    VALUES (?, ?, ?)");
    $stmt->execute(array($m_item, $m_price, $m_bought));
    print "Úspešně vloženo";
    print '<br><a href="index.html">Domů</a>';
    
} catch (PDOException $e) {
    print "Nelze se připojit k db: " . $e->getMessage();
}

?>