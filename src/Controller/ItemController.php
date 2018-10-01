<?php
namespace Controller;
// src/Controller/ItemController.php
// require __DIR__ . '/../Model/ItemManager.php';
//$items = selectAllItems();
use Model\ItemManager;

class ItemController {
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->SelectAllItems();
        require __DIR__ . '/../View/item.php';
    }
}
