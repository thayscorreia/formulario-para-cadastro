<?php

include_once('config.php');

$nome= $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$nascimento = $_POST['nascimento'];
$endereço = $_POST['endereço'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$nº = $_POST['nº'];
$complemento = $_POST['complemento'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(Nome,CPF,RG,Sexo,idade,nascimento,Endereço,Estado,cidade,cep,bairro,nº, complemento)VALUES($Nome,$CPF,$RG,$Sexo,$idade,$nascimento,$Endereço,$Estado,$cidade,$cep,$bairro,$nº,$complemento)");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=C, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Cadastro de Clientes</title>
    
</head>
<body>
    <fieldset>
    <div class="form">
        <form method="POST" action="index.php"><br>
            <h1>Cadastro de Clientes</h1><br>
            
            <label for="Nome">Nome:</label>
            <input type="text"Size="40"placeholder="Nome Completo">
            <label for="cpf">CPF:</label>
            <input type="number" placeholder="999.999.999-00"><br><br>
            <label for="email">E-mail:</label>
            <input type="text" size="40"placeholder="e-mail válido">
            <label for="rg">RG:</label>
            <input type="text"placeholder="999.999.999-x"><br><br>
            <label for="sexo">Sexo:</label>&nbsp;
            <label for="mas">Masculino</label>
            <input type="radio" name="opção"  id="op1">
            <label for="fem">Feminino</label>
            <input type="radio" name="opção" id="op1">
            <label for="outro">Outros</label>
            <input type="radio" name="opção" id="op1"><br><br>
            <label for="idade">Idade:</label>
            <input type="number"placeholder="12222"><br><br>
            <label for="data">Data de Nascimento:</label>
            <input type="date" name="data" id="data"><br><br>
            <h2>Endereço</h2>
            <label for="uf">Estado:</label>
            <input type="text"Size="40"placeholder="Digite seu Estado">
            <label for="cidade">Cidade:</label>
            <input type="text"Size="40"placeholder="Digite sua Cidade"><br><br>
            <label for="cep">Cep:</label>
            <input type="text"placeholder="77777-700">
            <label for="bairro">Bairro:</label>
            <input type="text"placeholder="Bairro"><br><br>
            <label for="RUA">Rua:</label>
            <input type="text" size="30"placeholder="Logradouro">
            <label for="nu">Nº:</label>
            <input type="number" size ="5"><br><br>
            <label for="comp">Complemento:</label>
            <input type="text"size="30" placeholder="Andar, Apartamento, Bloco"><br><br>
            
             <h3>"Atenção Confira os Dados antes de enviar!"</h3><br> 
            
             <input type="submit" value="Enviar"> &nbsp;&nbsp;
            <input type="button" value="Voltar">   
        </fieldset>
        
    </form>
</body>
</html>

    