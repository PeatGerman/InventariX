<?php
namespace App\Models;

use App\Services\Database;

class Cabinet
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function create($name, $description)
    {
        $stmt = $this->db->prepare("INSERT INTO cabinets (name, description) VALUES (?, ?)");
        return $stmt->execute([$name, $description]);
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM cabinets");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
