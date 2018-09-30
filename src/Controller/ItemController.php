<?php
// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';


namespace Controller;

class ItemController
{
    public function index()

}