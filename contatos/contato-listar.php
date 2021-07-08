<?php include "../includes/cabecalho-contato.php"
?>
<div class="row mt-5">
<div class="col-md-7 text-center mt-5">
<h1>lista de contatos</h1>
<div class="row">
<div class="col-md-12 text-center">
<a href="contatos-formulario-inserir.php" button type="button" class="btn btn-primary">adicionar contato</button></a>
</div>
</div>
</div>
<div class="col-md-5">
<img src="../img/listas.png">
</div>
</div>
<?php
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_arqcontatos";
$listarContatos = mysqli_query($conexao, $sqlBusca);
?>
<?php if(isset($_GET['mensagem'])){
     if($_GET['mensagem'] == 'cadastrado'){
         ?>
     
 <div class="alert alert-primary">
     <p>cadastrado com sucesso</p>
 </div>
 <?php
     }
     if($_GET['mensagem'] == 'excluido'){
         ?>
 <div class="alert alert-danger">
     <p>excluido com sucesso</p>
 </div>
 <?php
     }
    }
    ?>
    <div class="table mt-5">
        <table class="table text-center table-light">
            <thead>
                <tr>
                <th>ID</th>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>cidade</th>
                    <th>assunto</th>
                    <th>ações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while($contato = mysqli_fetch_assoc($listarContatos)) {
                  echo "<tr>";
                  echo "<td>{$contato['id']}</td>";
                  echo "<td>{$contato['nome']}</td>";
                  echo "<td>{$contato['email']}</td>";
                  echo "<td>{$contato['telefone']}</td>";
                  echo "<td>{$contato['cidade']}</td>";
                  echo "<td>{$contato['assunto']}</td>";
                  echo "<td><a class='btn btn-primary' href='contatos-formulario-alterar.php?id={$contato['id']}'><i class='bi bi-gear'></i></a> |";
                  echo "<a class='btn btn-danger' href='contatos-excluir.php?id={$contato['id']}'><i class='bi bi-trash'></i></a></td>";
                  echo "</tr>"; 
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include "../includes/rodape.php"; ?>
      <script src="../boostrap/bootstrap.min.js"></script>
  </body>