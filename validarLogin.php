<?php

if(isset($_POST['btnenviar'])){
    include_once('conecta.php');
    $emaillogar=$_POST['caixa1'];
    $senhalogar=$_POST['caixa2'];
   $sql = "SELECT * FROM cadastrar_user WHERE email = '$emaillogar' AND senha ='$senhalogar'";
   $result = $conn->query($sql);
   
   //print_r($sql);
   //print_r($result);
  
   if(mysqli_num_rows($result) < 1 ){
     

     header('Location: index.php');
   }else {
   
    header('Location: formulario.php');
   }

}
?>
