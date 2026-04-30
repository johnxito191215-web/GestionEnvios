<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Envíos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Lista de Envíos</h2>

<a href="crear.php">➕ Nuevo Envío</a>

<table border="1">
<tr>
    <th>Código</th>
    <th>Descripción</th>
    <th>Destino</th>
    <th>Acciones</th>
</tr>

<?php
$sql = "SELECT * FROM envios";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['codigo']}</td>
        <td>{$row['descripcion']}</td>
        <td>{$row['destino']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a> |
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>
