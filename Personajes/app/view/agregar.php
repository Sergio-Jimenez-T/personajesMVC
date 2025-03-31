<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Agregar nuevo personaje</h1>
    </header>

    <div class="container">
        <form action="index.php?action=guardar" method="post">
            <label for="personaje">Personaje:</label><br>
            <input type="text" id="personaje" name="personaje" required><br><br>

            <label for="saga">Saga:</label><br>
            <input type="text" id="saga" name="saga" required><br><br>

            <label for="especie">Especie:</label><br>
            <input type="text" id="especie" name="especie" required><br><br>
            
            <button type="submit">Agregar</button>

        </form>
    </div>
</body>
</html>     