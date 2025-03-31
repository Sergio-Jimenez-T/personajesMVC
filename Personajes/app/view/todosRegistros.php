<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personajes de VideoJuegos</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Personajes</h1>
    </header>

    <div class="container">
        <h2>Lista de Personajes</h2>
        <a href="index.php?action=agregar">Agregar un Nuevo personaje 🐱‍🏍</a>
        
        <?php if (!empty($rowset)): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Personaje</th>
                        <th>Saga</th>
                        <th>Especie</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rowset as $row): ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->personaje; ?></td>
                            <td><?php echo $row->saga; ?></td>
                            <td><?php echo $row->especie; ?></td>
                            <td>
                                <a href="index.php?action=editarPersonaje&id=<?php echo $row->id; ?>">Editar</a>
                                <a href="index.php?action=eliminar&id=<?php echo $row->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay personajes disponibles.</p>
            <a href="index.php?action=agregar">Agregar</a>
        <?php endif; ?>
    </div>
</body>
</html>
