<?php

namespace App\Controllers;

use App\Models\Cabinet;
use App\Services\Database;

class CabinetController
{
    private $cabinetModel;

    public function __construct()
    {
        $db = new Database(require_once __DIR__ . '/../config/config.php');
        $this->cabinetModel = new Cabinet($db);
    }

    // Schrankübersicht anzeigen
    public function index()
    {
        $cabinets = $this->cabinetModel->getAll();
        include __DIR__ . '/../Views/cabinets.php'; // View für die Schrankübersicht
    }

    // Schrank erstellen
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $this->cabinetModel->create($name, $description);
            header('Location: /InventariX/public/cabinets'); // Weiterleitung zur Schrankübersicht nach Erstellung
            exit();
        }

        include __DIR__ . '/../Views/create_cabinet.php'; // View für die Schrankerstellung
    }
}
