<?php
   require_once "../conexao/conexao.php";
   if($_POST){
      $nome = $_POST['nome'];
      $valor = $_POST['valor'];
      $quantidade = $_POST['quantidade'];
      $usuario = $_POST['usuario'];
      $data = $_POST['data_cadastro'];
      $descricao = $_POST['descricao'];

      $sql = "UPDATE produtos 
      SET nome= '$nome', valor = '$valor', quantidade = '$quantidade',
      cadastro_pessoa = '$usuario', data_cadastro ='$data', descricao = '$descricao'";

      if($conexao -> query($sql)){
         echo "Produto Atualizado!
         <button><a href='./index.php'>Voltar</a></button>";
      }
      else{
         echo "Erro". $sql . $conexao -> connect_error;
      }
      $conexao->close();
   }
?>