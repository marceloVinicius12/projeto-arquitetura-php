<?php
include "../includes/conexao.php";

$id_contato = $_POST['id_contato'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sqlAlterar = "UPDATE tb_arqcontatos SET 
               nome = '{$nome}' , 
               email = '{$email}',
              telefone = '{$telefone}' ,       
               cidade = '{$cidade}' , 
               assunto = '{$assunto}',
               mensagem = '{$mensagem}' 
               WHERE id = {$id_contato}
               ;";
                //print_r($sqlAlterar);
               $resultado = mysqli_query($conexao , $sqlAlterar);
               if($resultado){
                echo "alterado com sucesso";
                echo "<a href='contato-listar.php'>voltar</a>";
            }else{
                echo "algo errado aconteceu";
            }
             ?>
                