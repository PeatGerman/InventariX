<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventariX - Inventar erstellen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Inventar erstellen</h1>
    <form method="POST" action="/InventariX/public/inventory/create">
        <div class="form-group">
            <label for="name">Artikelname</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Gib den Namen des Artikels ein" required>
        </div>
        <div class="form-group">
            <label for="cabinet_id">Schrank auswählen</label>
            <select class="form-control" id="cabinet_id" name="cabinet_id">
                <!-- Schränke aus der Datenbank holen -->
                <?php foreach ($cabinets as $cabinet): ?>
                    <option value="<?= $cabinet['id'] ?>"><?= $cabinet['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Inventar erstellen</button>
        <a href="/InventariX/public/inventories" class="btn btn-secondary ml-3">Zurück zur Übersicht</a>
    </form>
</div>
</body>
</html>
