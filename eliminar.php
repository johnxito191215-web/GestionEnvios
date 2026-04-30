<?php include("conexion.php"); ?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM envios WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>
