<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // Die View für die Startseite einbinden
        include __DIR__ . '/../Views/home.php';
    }
}
