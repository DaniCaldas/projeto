<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <form action="cadastrar.php" method="post">
            <h1>Cadastro de Produtos</h1>
            <p>Nome do Produto</p>
            <input type="text" name="nome" id="" placeholder="Lapis">
            <p>Valor</p>
            <input type="number" name="valor" id="" placeholder="1.50">
            <p>Quantidade</p>
            <input type="number" name="quantidade" id="" placeholder="1">
            <p>Seu Nome</p>
            <input type="text" name="usuario" id="" placeholder="Lucas almeida">
            <p>Data de Cadastro</p>
            <input type="date" name="data_cadastro" id="">
            <p>Descriçao do produto</p>
            <textarea name="descricao" id="" cols="30" rows="10">
            </textarea>
            <button type="submit">Cadastrar</button>
            <button><a href="./index.php">Voltar</a></button>
        </form>
    </div>
</body>
</html>

<?php
    require_once "../conexao/conexao.php";

    if($_POST){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $usuario = $_POST['usuario'];
        $data = $_POST['data_cadastro'];
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO produtos (nome, data_cadastro, descricao, quantidade, valor, cadastro_pessoa)
         VALUES ('$nome', '$data', '$descricao', '$quantidade', '$valor', '$usuario')";

    if($conexao -> query($sql)){ 
        echo "<h3>Produto Cadastrado!</h3>"; 
    }else{ 
        echo "Erro:" . $sql . $conexao -> connect_error; 
    } 
    $conexao -> close(); 
    } 
?>