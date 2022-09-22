
<!DOCTYPE html>
<html lang="pt-br">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Plano Saude </title>
 </head>
 <body>
 <a id="voltar" href="home.php">Voltar</a>
    <form action="validarLogin.php" id="formulario" method="POST" name="formulario">
        <h1>Login</h1>
        <input type="email" name="caixa1" id="email" placeholder="email" required>
        <br><br>
        <input type="password" name="caixa2" id="senha" placeholder="senha" required>
        <br><br>
        <input type="submit" value="Entrar" name="btnenviar" class="btn_edit" >
    </form>
 </body>

</html>