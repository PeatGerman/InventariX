<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventariX - Schrankübersicht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Schrankübersicht</h1>

    <!-- Schränke anzeigen -->
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Beschreibung</th>
            <th>Aktionen</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cabinets as $cabinet): ?>
            <tr>
                <td><?= htmlspecialchars($cabinet['name']) ?></td>
                <td><?= htmlspecialchars($cabinet['description']) ?></td>
                <td>
                    <a href="/InventariX/public/cabinet/<?= $cabinet['id'] ?>" class="btn btn-info btn-sm">Details</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/InventariX/public/cabinet/create" class="btn btn-primary mt-3">Neuen Schrank erstellen</a>
</div>
</body>
</html>
