
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form.css">
    <title>unimed</title>

</head>
<a href="home.php">Voltar</a>
<body>

    <div class="planos">
        <h2>Unimed</h2>

        <div class="cards">
            <div class="card">
                <table border="1">
                    <tr>
                        <td>Faixa etaria</td>
                        <td>Enfermaria</td>
                        <td>Apartamento</td>
                    </tr>
                    <tr>
                        <td>0 -- 18 anos</td>
                        <td>193,00</td>
                        <td>282,00</td>
                    </tr>
                    <tr>
                        <td>19 -- 23 anos</td>
                        <td>221,00</td>
                        <td>325,00</td>
                    </tr>
                    <tr>
                        <td>24 -- 28 anos</td>
                        <td>255,00</td>
                        <td>373,00</td>
                    </tr>
                    <tr>
                        <td>29 -- 38 anos</td>
                        <td>337,00</td>
                        <td>494,00</td>
                    </tr>
                    <tr>
                        <td>39 -- 53 anos</td>
                        <td>616,00</td>
                        <td>800,00</td>
                    </tr>
                    <tr>
                        <td>54 anos ou mais</td>
                        <td>800,00</td>
                        <td>1200,00</td>
                    </tr>

                </table>
            </div>


        </div>
    </div><br>

    <div class="form">
        <form action="validar_formulario.php" method="POST">
            <fieldset>
                <legend>Cadastro</legend>
                <div class="input">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputusuario" require>
                </div><br>
                <div class="input">
                    <label for="nome">informe sua idade</label>
                    <input type="text" name="idadepessoa" id="nome" class="inputidade" require>
                </div><br>
                <div class="input">
                    <p>Qual plano deseja solicitar</p>
                    <p>1 para ENFERMARIA</p>
                    <p>2 para APARTAMENTO</p>
                    <input type="text" id="tipoPlano" name="tipoPlano">
                   
                </div><br>
                <div class="input">
                    <label for="nome">Possui algum dependente,se sim informe a idade de cada um</label>
                </div><br> 
        
                <div class="input">
                    <label for="nome">informe a idade do  primeiro dependente</label>
                    <input type="text" name="idadedependente1" id="nome" class="inputidade" require>
                </div><br>
                <div class="input">
                    <label for="nome">informe a idade do segundo dependente</label>
                    <input type="text" name="idadedependente2" id="nome" class="inputidade" require>
                </div><br>
                <div class="input">
                    <label for="nome">informe a idade do terceiro dependente</label>
                    <input type="text" name="idadedependente3" id="nome" class="inputidade" require>
                </div><br>
             
                <input type="submit" value="Calcular" name="calcular" id="btn">
                <input type="submit" value=" Confirmar" id="btn">
            </fieldset>
        </form>
    </div>
</body>

</html>