<?php

use App\Controllers\CabinetController;
use App\Controllers\InventoryController;
use App\Controllers\HomeController;

// Einfaches Routing
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    // Home-Seite
    case '/InventariX/public/':
        $controller = new HomeController();
        $controller->index();
        break;

    // Schrankübersicht
    case '/InventariX/public/cabinets':
        $controller = new CabinetController();
        $controller->index();
        break;

    // Weitere Routen für Schränke und Inventar
    case '/InventariX/public/cabinet/create':
        $controller = new CabinetController();
        $controller->create();
        break;

    case '/InventariX/public/inventories':
        $controller = new InventoryController();
        $controller->index();
        break;

    case '/InventariX/public/inventory/create':
        $controller = new InventoryController();
        $controller->create();
        break;

    case (preg_match('/^\/InventariX\/public\/inventory\/[0-9]+$/', $request) ? true : false):
        $controller = new InventoryController();
        $controller->show($request);
        break;

    default:
        // Standardroute (Seite nicht gefunden)
        echo "Seite nicht gefunden!";
        break;
}
