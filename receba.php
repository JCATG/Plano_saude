<?php

include_once("conecta.php");
  $email=$_POST['caixaemail'];
  $senha=$_POST['caixasenha'];

 $result = "INSERT INTO cadastrar_user(email, senha, criado) VALUE ('$email','$senha', NOW())";

 $resultado = mysqli_query($conn, $result);

 header('Location: formulario.php');
 

?>