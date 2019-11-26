<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>FALTAS</h1>
    <form action="DB_PHP/Cadastros/cadastra_falta.php" method="POST">
        <span>Materia</span>
        <input type="text" name="materia">
        <br><br>
        <span>Quantidade</span>
        <input type="text" name="qtd">
        <br><br>
        <input type="submit">
    </form>
<br><br>
    <h1>COMPROMISSOS</h1>
    <form action="DB_PHP/Cadastros/cadastra_compromissos.php" method="POST">
        <span>Descrição</span>
        <input type="text" name="descricao">
        <br><br>
        <span>Data</span>
        <input type="text" name="data">
        <br><br>
        <input type="submit">
    </form>
<br><br>
    <h1>PROVAS</h1>
    <form action="DB_PHP/Cadastros/cadastra_provas.php" method="POST">
        <span>Materia</span>
        <input type="text" name="materia">
        <br><br>
        <span>Data</span>
        <input type="text" name="data">
        <br><br>
        <input type="submit">
    </form>
<br><br>

<?php
    
    require_once('DB_PHP/conecta_db.php');
    
    $sql = " SELECT * FROM `faltas`  WHERE 1 ";
    $sqlcom = " SELECT * FROM  `compromissos`  WHERE 1 ";
    $sqlpro = " SELECT * FROM `provas` WHERE 1 ";

    $resultado = mysqli_query($conn, $sql);
    $resultadocomp = mysqli_query($conn, $sqlcom);
    $resultadopro = mysqli_query($conn, $sqlpro);
      
    if($resultado){
        // faltas
        echo '<br></br><h1>FALTAS</h1>';
        while($registros = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
          $materia = $registros['materia'];
          $qtd = $registros['quantidade'];
          echo '<div class="row">';
          echo '<div class="col align-self-start">';
          echo $materia;
          echo '</div>';
          echo '<div class="col align-self-start">'; 
          echo $qtd;
          echo '</div>';
          echo '</div>';
      }
    }
      if($resultadocomp){
          // compromissos
          echo '<br></br><h1>COMPROMISSOS</h1>';
          while($registros = mysqli_fetch_array($resultadocomp, MYSQLI_ASSOC)){
          
          $descricao = $registros['descricao'];
          $data = $registros['data'];
            
          echo '<div class="row">';
          echo '<div class="col align-self-start">';
          echo $descricao;
          echo '</div>';
          echo '<div class="col align-self-start">'; 
          echo $data;
          echo '</div>';
          echo '</div>';
    
        }
      }
      if($resultadopro){
        // provas
        echo '<br></br><h1>PROVAS</h1>';
        while($registros = mysqli_fetch_array($resultadopro, MYSQLI_ASSOC)){
        
        $materia = $registros['materia'];
        $data = $registros['data'];
          
        echo '<div class="row">';
        echo '<div class="col align-self-start">';
        echo $materia;
        echo '</div>';
        echo '<div class="col align-self-start">'; 
        echo $data;
        echo '</div>';
        echo '</div>';
  
      }
    }
    else{
      echo 'Erro na consulta do banco de dados!';
    }
    
?>

</body>
</html>