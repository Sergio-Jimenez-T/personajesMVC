<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Eliminar personaje</h1>
    </header>

    <div class="container">
        <?php if (isset($row)): ?> <!-- Verifica si $row está definido -->
            <p>¿desea eliminar el siguiente personaje "<?php echo $row->Modelo; ?>"?</p>
            <a href="index.php?action=eliminar&id=<?php echo $id; ?>&confirmar=1">Eliminar</a>
            <!--<a href="index.php">Cancelar Operación</a>-->
        <?php else: ?>
            <p>El personaje no existe o ya fue eliminado.</p>
            <a href="index.php">Volver</a>
        <?php endif; ?>
    </div>
</body>
</html>