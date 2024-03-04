<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
