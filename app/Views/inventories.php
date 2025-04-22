<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventariX - Inventarübersicht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Inventarübersicht</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Artikelname</th>
            <th>Schrank</th>
            <th>Aktionen</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($inventories as $inventory): ?>
            <tr>
                <td><?= htmlspecialchars($inventory['name']) ?></td>
                <td><?= htmlspecialchars($inventory['cabinet_id']) ?></td>
                <td>
                    <a href="/InventariX/public/inventory/<?= $inventory['id'] ?>" class="btn btn-info btn-sm">Details</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/InventariX/public/inventory/create" class="btn btn-primary mt-3">Neues Inventar hinzufügen</a>
</div>
</body>
</html>
