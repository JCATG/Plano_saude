<?php


$servidor = "localhost";
$usuario = "root";
$senha ="";
$dbname = "unimed";

//criar conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);



/*

session_start();
$_SESSION;
try{

$conecta = new PDO("msql:host=127.0.0.1;port=3306;dbname=unimed","root","");
$conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$texto = "SELECT * FROM cadastrar_user WHERE email = 'name' AND senha = 'pasword' ";
$dados = $conecta->query($texto);
$linha=$dados->fetch(PDO::FETCH_ASSOC);

if($linha > 0){
    echo"bem vindo";
}
else{
    echo"usuario e senha invalido";
}
}catch(PDOException $erro){
 echo"sem conexao";
}




*/
?>


