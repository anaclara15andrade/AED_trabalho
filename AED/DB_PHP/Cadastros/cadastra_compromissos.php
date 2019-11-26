<?php

require_once("../conecta_db.php");

$descricao = $_POST['descricao']; echo $descricao."<br>";
$data = $_POST['data']; echo $data;

$sql = "INSERT INTO `compromissos`(`compromissos_id`, `descricao`, `data`) VALUES (NULL,'$descricao','$data')";
$query = mysqli_query($conn, $sql);
header("Location: ../../index.php");

?>
