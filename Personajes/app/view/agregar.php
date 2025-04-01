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
		<button type="button" onclick="window.history.back();">Regresar</button>
    </header>

    <div class="container">
        <form action="index.php?action=guardar" method="post">
            <label for="personaje">Personaje:</label>
            <input type="text" id="personaje" name="personaje" required>

            <label for="saga">Saga:</label>
            <input type="text" id="saga" name="saga" required>

            <label for="especie">Especie:</label>
            <input type="text" id="especie" name="especie" required>
            
            <button type="submit">Agregar</button>
        </form>
    </div>
</body>
</html>     