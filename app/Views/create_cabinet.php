<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventariX - Schrank erstellen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Schrank erstellen</h1>
    <form method="POST" action="/InventariX/public/cabinet/create">
        <div class="form-group">
            <label for="name">Schrankname</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Gib den Namen des Schrankes ein" required>
        </div>
        <div class="form-group">
            <label for="description">Beschreibung</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Gib eine Beschreibung des Schrankes ein"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Schrank erstellen</button>
        <a href="/InventariX/public/cabinets" class="btn btn-secondary ml-3">Zurück zur Übersicht</a>
    </form>
</div>
</body>
</html>
