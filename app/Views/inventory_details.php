<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventariX - Inventar Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Inventar Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($inventory['name']) ?></h5>
            <p class="card-text">Schrank-ID: <?= htmlspecialchars($inventory['cabinet_id']) ?></p>
        </div>
    </div>

    <a href="/InventariX/public/inventories" class="btn btn-secondary mt-3">Zurück zur Übersicht</a>
</div>
</body>
</html>
