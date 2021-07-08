<?php 

include "../includes/conexao.php";
$id_contato = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_arqcontatos WHERE id = {$id_contato} ;";

$resultado = mysqli_query($conexao , $sqlExcluir);
if($resultado){
    header('location:contato-listar.php?mensagem=excluido');
}else{
echo "algo deu errado";
}

?>
?>