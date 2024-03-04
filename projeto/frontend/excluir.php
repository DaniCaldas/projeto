<?php
    require_once "../conexao/conexao.php";

    
        $id = $_GET['id'];
        $sql = "DELETE FROM produtos WHERE id = $id";

        if($conexao -> query($sql)){
            echo "Produto Deletado com sucesso!
            <a href='index.php'><button >Voltar</button></a>
            ";
        }else{
            die( "Erro:". $sql . $conexao -> connect_error ); 
        }
        $conexao -> close();
    
?>