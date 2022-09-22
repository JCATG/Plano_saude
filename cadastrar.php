
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/cadastrar.css">
    <title>Cadastrar  </title>
</head>
<body>
     <a href="home.php">Voltar</a>
  <form action="receba.php" id="formulario" method="POST" name="formulario">
    <h1>Cadastrar</h1>
    <input type="email" name="caixaemail" id="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="caixasenha" id="senha"  placeholder="Senha" required>
    <br><br>
    <input type="submit" value="Cadastrar" class="btn_cad">
  </form>
</body>
</html>