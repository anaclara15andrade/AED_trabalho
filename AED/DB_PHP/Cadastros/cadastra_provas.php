<?php

require_once("../conecta_db.php");

$materia = $_POST['materia']; echo $materia."<br>";
$data = $_POST['data']; echo $data;

$sql = "INSERT INTO `provas`(`provas_id`, `materia`, `data`) VALUES (NULL,'$materia','$data')";
$query = mysqli_query($conn, $sql);
header("Location: ../../index.php");

?>