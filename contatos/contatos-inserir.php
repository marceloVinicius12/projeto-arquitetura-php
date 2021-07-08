<?php include "../includes/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sqlInserir = "INSERT INTO tb_arqcontatos(nome, email, telefone, cidade, assunto, mensagem)
VALUES(
    '{$nome}',
    '{$email}',
 '{$telefone}',
 '{$cidade}',
 '{$assunto}',
 '{$mensagem}'
 );";
 $resultado = mysqli_query($conexao, $sqlInserir);
 if($resultado){
    header('Location:contato-listar.php?mensagem=cadastrado');
}else{
    echo "algo deu errado";
}   
?>