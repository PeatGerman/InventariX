<?php

namespace App\Controllers;

use App\Models\Inventory;
use App\Services\Database;

class InventoryController
{
    private $inventoryModel;

    public function __construct()
    {
        $db = new Database(require_once __DIR__ . '/../config/config.php');
        $this->inventoryModel = new Inventory($db);
    }

    // Inventarübersicht anzeigen
    public function index()
    {
        $inventories = $this->inventoryModel->getAll();
        include __DIR__ . '/../Views/inventories.php'; // View für die Inventarübersicht
    }

    // Inventar erstellen
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $cabinet_id = $_POST['cabinet_id'];
            $this->inventoryModel->create($name, $cabinet_id);
            header('Location: /InventariX/public/inventories'); // Weiterleitung zur Inventarübersicht nach Erstellung
            exit();
        }

        include __DIR__ . '/../Views/create_inventory.php'; // View für das Erstellen eines Inventars
    }

    // Inventar-Details anzeigen
    public function show($request)
    {
        // Extrahieren der Inventar-ID aus der URL
        $id = (int) substr($request, strrpos($request, '/') + 1);
        $inventory = $this->inventoryModel->getById($id);
        include __DIR__ . '/../Views/inventory_details.php'; // View für Inventar-Details
    }
}
