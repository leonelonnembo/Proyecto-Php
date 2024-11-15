<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Lista de Productos</h1>
    <a href="crear.php">Agregar Nuevo Producto</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM productos";
        $resultado = $conn->query($sql);

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['id']}</td>";
            echo "<td>{$fila['nombre']}</td>";
            echo "<td>{$fila['precio']}</td>";
            echo "<td>{$fila['descripcion']}</td>";
            echo "<td>
                    <a href='editar.php?id={$fila['id']}'>Editar</a> |
                    <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
