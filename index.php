<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <!-- Importar Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <!-- Botón para Crear Tarea con Materialize -->
            <a href="insertar.php" class="btn waves-effect waves-light green darken-2">Crear tarea</a>
            <br><br>

            <!-- Tarjeta con la Tabla de Tareas -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Lista de Tareas</span>
                    <table class="highlight responsive-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tarea</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require "includes/config.php";
                                $query = $conn->query("SELECT * FROM tareas ORDER BY id DESC");

                                foreach ($query as $value) {
                            ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['tarea']; ?></td>
                                <td><?= $value['fecha']; ?></td>
                                <td>
                                    <a href="eliminar.php?id=<?= $value['id']; ?>" class="btn red darken-1 waves-effect waves-light">Eliminar</a>
                                    <a href="editar.php?id=<?= $value['id']; ?>" class="btn blue waves-effect waves-light">Editar</a>
                                    <?php if ($value['terminada'] != 'culminado') { ?>
        <!-- Botón blanco para tarea no completada -->
        <a href="terminada.php?id=<?= $value['id']; ?>" class="btn white black-text waves-effect waves-light">pendiente</a>
    <?php } else { ?>
        <!-- Botón verde para tarea completada -->
        <button class="btn green waves-effect waves-light">Culminado</button>
    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Importar JavaScript de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
