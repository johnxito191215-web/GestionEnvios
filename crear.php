<?php include("conexion.php"); ?>

<?php
if ($_POST) {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destino = $_POST['destino'];

    $sql = "INSERT INTO envios (codigo, descripcion, destino)
            VALUES ('$codigo', '$descripcion', '$destino')";

    $conn->query($sql);
    header("Location: index.php");
}
?>

<h2>Nuevo Envío</h2>

<form method="POST">
    Código: <input type="text" name="codigo" required><br>
    Descripción: <input type="text" name="descripcion" required><br>
    Destino: <input type="text" name="destino" required><br>
    <button type="submit">Guardar</button>
</form>
