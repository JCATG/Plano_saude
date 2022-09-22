<?php
if(isset($_POST['confirmar'])){
    include_once("conecta.php");
    $nome = $_POST['Nome'];
    $idade = $_POST['idadepessoa'];
    $tipoplano = $_POST['tipoPlano'];
    $dependente1 = $_POST['idadedependente1'];
    $dependente2 = $_POST['idadedependente2'];
    $dependente3 = $_POST['idadedependente3'];
    $totalGeral;
 
  $result = "INSERT INTO dados_consulta(Nome, idade, 
  TipoPlano, primeirodependente, segundodependente, terceirodependente, 
  Totalplano  ) VALUE ('$nome','$idade','$tipoplano','$dependente1','$dependente2','$dependente3','$totalGeral')";
 
  $resultado = mysqli_query($conn, $result);

  header('Location: formulario.php');
  
 }
