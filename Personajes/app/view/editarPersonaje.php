<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Editar Personaje</h1>
		<button type="button" onclick="window.history.back();">Regresar</button>
    </header>

    <div class="container">
        <div class="container2">

		<form action="index.php?action=actualizarPersonaje" method="POST">
			<input type="hidden" name="id" value="<?= $row->id ?>">
			<label>Personaje:</label>
			<input type="text" name="personaje" value="<?= $row->personaje ?>">
			<label>Saga:</label>
			<input type="text" name="saga" value="<?= $row->saga ?>">
			<label>Especie:</label>
			<input type="text" name="especie" value="<?= $row->especie ?>">
			<button type="submit">Actualizar</button>
		</form>
        </div>
    </div>
</body>
</html>