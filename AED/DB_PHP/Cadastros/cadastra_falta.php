<?php

require_once("../conecta_db.php");

$qtd = $_POST['qtd']; echo $qtd."<br>";
$materia = $_POST['materia']; echo $materia;

$sql = "INSERT INTO `faltas`(`faltas_id`, `quantidade`, `materia`) VALUES (NULL,$qtd,'$materia')";
$query = mysqli_query($conn, $sql);
header("Location: ../../index.php");

?>
