<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 40px; ">
        <h1>Produtos Cadastrados</h1>
        <button><a href="./cadastrar.php">Cadastrar Produto</a></button>
    </div>
</body>
</html>

<?php
    require_once "../conexao/conexao.php";

    $sql = $conexao->query("SELECT * FROM produtos");

    if($sql->num_rows > 0){  
        while ($row = mysqli_fetch_assoc($sql)) {
            echo"
                <div class='container' style=' justify-content: center; display:flex; align-items: center;  flex-direction:column;margin-top:20px; padding:5px; border:solid 2px black; width:30vw; border-radius:6px;'>
                    <p>".$row['nome']."</p>
                    <p> R$ ".$row['valor']."</p>
                    <p>".$row['quantidade']."</p>
                    <textarea disabled style='width:20vw;'>".$row['descricao']."</textarea>
                    <p>".$row['cadastro_pessoa']."</p>
                    <p>".$row['data_cadastro']."</p>
                    <div>
                    <a href='alterar.php?id=".$row['id']."'><button class='btn btn-primary' name='id' >Editar</button></a>
                    <a href='excluir.php?id=".$row['id']."'><button class='btn btn-danger' name='id' >Excluir</button></a>
                    </div>
                </div>
            ";
        }
    }
?> 