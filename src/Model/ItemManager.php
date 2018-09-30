<?php
// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';


namespace Model;

class ItemManager
{
    public function selectAllItems()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}

?>
