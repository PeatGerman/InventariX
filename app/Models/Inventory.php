<?php

namespace App\Models;

class Inventory
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Alle Inventare abrufen
    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM inventories");
        return $stmt->fetchAll();
    }

    // Ein Inventar nach ID abrufen
    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM inventories WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Ein Inventar erstellen
    public function create($name, $cabinet_id)
    {
        $stmt = $this->db->prepare("INSERT INTO inventories (name, cabinet_id) VALUES (:name, :cabinet_id)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':cabinet_id', $cabinet_id);
        $stmt->execute();
    }
}
