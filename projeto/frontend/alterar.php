<?php
    require_once "../conexao/conexao.php";
   if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $id");
    
    $row = mysqli_fetch_assoc($sql);
   }
?>

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
    <div class="container" style="margin-top: 50px;">
    <form action="./confirmar.php?" method="post">
            <h1>Cadastro de Produtos</h1>
            <p>Nome do Produto</p>
            <input type="text" name="nome" id="" value="<?php echo $row['nome']?>">
            <p>Valor</p>
            <input type="number" name="valor"  value="<?php echo $row['valor']?>" id="">
            <p>Quantidade</p>
            <input type="number" name="quantidade"  value="<?php echo $row['quantidade']?>" id="" >
            <p>Seu Nome</p>
            <input type="text" name="usuario"  value="<?php echo $row['cadastro_pessoa']?>" id="">
            <p>Data de Cadastro</p>
            <input type="date" name="data_cadastro"  value="<?php echo $row['data_cadastro']?>" id="">
            <p>Descriçao do produto</p>
            <textarea name="descricao" id="" cols="30" rows="10">
                <?php echo $row['descricao']?>
            </textarea>
            <button class="btn btn-primary" type="submit">Editar</button>
            <button class="btn btn-secondary" ><a style="text-decoration: none; color: black;" href="./index.php">Voltar</a></button>
    </form>
    </div>
</body>
</html>