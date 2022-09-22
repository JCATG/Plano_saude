<?php

if ((isset($_POST['calcular']))) {
  # code...

  $nome = $_POST['nome'];
  $idade = $_POST['idadepessoa'];
  $tipoplano = $_POST['tipoPlano'];
  $dependente1 = $_POST['idadedependente1'];
  $dependente2 = $_POST['idadedependente2'];
  $dependente3 = $_POST['idadedependente3'];


  print_r('Nome: ' . $nome);
  print_r('<br>');
  print_r('Idade: ' . $idade);
  print_r('<br>');
  print_r('Tipo Plano: ' . $tipoplano);
  print_r('<br>');
  print_r('idade dependente1: ' . $dependente1);
  print_r('<br>');
  print_r('idade dependente2: ' . $dependente2);
  print_r('<br>');
  print_r(' idade dependente3: ' . $dependente3);
  print_r('<br>');

  if ($tipoplano == 1) {
    echo " Voce escolheu o plano Enfermaria"  . "<br>";
    //$conte = 0;
    $total = 0;
    $totalGeral = 0;
    $total1 = 0;
    $total2 = 0;
    $total3 = 0;

    ////TITULAR
    if ($idade > 0 && $idade <= 18) {
      $total = 193;
      echo "Total titular= " . $total . "<br>";
    }
    if ($idade > 18 && $idade <= 23) {
      $total = 221;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 23 && $idade <= 28) {
      $total = 255;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 28 && $idade <= 38) {
      $total = 337;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 38 && $idade <= 53) {
      $total = 616;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade >= 54) {
      $total = 800;
      echo "Total titular = " . $total . "<br>";
    }
    //DEPENDENTE1
    if ($dependente1 > 0 && $dependente1 <= 18) {
      $total1 = 193;
      echo "Total dependente 1= " . $total1 . "<br>";
    }
    if ($dependente1 > 18 && $dependente1 <= 23) {
      $total1 = 221;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 23 && $dependente1 <= 28) {
      $total1 = 255;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 28 && $dependente1 <= 38) {
      $total1 = 337;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 38 && $dependente1 <= 53) {
      $total1 = 616;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 >= 54) {
      $total1 = 800;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    //DEPENDENTE2
    if ($dependente2 > 0 && $dependente2 <= 18) {
      $total2 = 193;
      echo "Total  dependente 2= " . $total2 . "<br>";
    }
    if ($dependente2 > 18 && $dependente2 <= 23) {
      $total2 = 221;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 23 && $dependente2 <= 28) {
      $total2 = 255;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 28 && $dependente2 <= 38) {
      $total2 = 337;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 38 && $dependente2 <= 53) {
      $total2 = 616;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 >= 54) {
      $total2 = 800;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    //DEPENDETE3
    if ($dependente3 > 0 && $dependente3 <= 18) {
      $total3 = 193;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 18 && $dependente3 <= 23) {
      $total3 = 221;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 23 && $dependente3 <= 28) {
      $total3 = 255;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 28 && $dependente3 <= 38) {
      $total3 = 337;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 38 && $dependente3 <= 53) {
      $total3 = 616;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 >= 54) {
      $total3 = 800;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    $totalGeral = $total + $total1 + $total2 + $total3;
    echo "Total do plano: " . $totalGeral;
          
  } 
  else if($tipoplano == 2){
    echo " voce escolheu o plano  Apartamento";
    $total = 0;
    $totalGeral = 0;
    $total1 = 0;
    $total2 = 0;
    $total3 = 0;
  
    if ($idade > 0 && $idade <= 18) {
      $total = 282;
      echo "Total titular= " . $total . "<br>";
    }
    if ($idade > 18 && $idade <= 23) {
      $total = 325;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 23 && $idade <= 28) {
      $total = 373;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 28 && $idade <= 38) {
      $total = 494;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade > 38 && $idade <= 53) {
      $total = 902;
      echo "Total titular = " . $total . "<br>";
    }
    if ($idade >= 54) {
      $total = 1200;
      echo "Total titular = " . $total . "<br>";
    }
    //dependente1
    if ($dependente1 > 0 && $dependente1 <= 18) {
      $total1 = 282;
      echo "Total dependente 1= " . $total1 . "<br>";
    }
    if ($dependente1 > 18 && $dependente1 <= 23) {
      $total1 = 325;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 23 && $dependente1 <= 28) {
      $total1 = 373;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 28 && $dependente1 <= 38) {
      $total1 = 494;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 > 38 && $dependente1 <= 53) {
      $total1 = 902;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    if ($dependente1 >= 54) {
      $total1 = 1200;
      echo "Total dependente 1 = " . $total1 . "<br>";
    }
    //dependente2
    if ($dependente2 > 0 && $dependente2 <= 18) {
      $total2 = 282;
      echo "Total  dependente 2= " . $total2 . "<br>";
    }
    if ($dependente2 > 18 && $dependente2 <= 23) {
      $total2 = 325;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 23 && $dependente2 <= 28) {
      $total2 = 373;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 28 && $dependente2 <= 38) {
      $total2 = 494;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 > 38 && $dependente2 <= 53) {
      $total2 = 902;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    if ($dependente2 >= 54) {
      $total2 = 1200;
      echo "Total dependente 2 = " . $total2 . "<br>";
    }
    //dependente3
    if ($dependente3 > 0 && $dependente3 <= 18) {
      $total3 = 282;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 18 && $dependente3 <= 23) {
      $total3 = 325;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 23 && $dependente3 <= 28) {
      $total3 = 373;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 28 && $dependente3 <= 38) {
      $total3 = 494;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 > 38 && $dependente3 <= 53) {
      $total3 = 902;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    if ($dependente3 >= 54) {
      $total3 = 1200;
      echo "Total dependente 3 = " . $total3 . "<br>";
    }
    $totalGeral = $total + $total1 + $total2 + $total3;
    echo "Total do plano: " . $totalGeral;
          
  }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>unimed</title>
</head>
<body>
<form action="gravarformulario.php" method="post">
  <input type="submit" value="gravar Banco" name="confirmar">
  </form>
</body>
</html>
