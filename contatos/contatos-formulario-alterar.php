<?php 
include "../includes/cabecalho-contato.php";
include "../includes/conexao.php"; 

$id_contato = $_GET['id'];
$sqlBusca = "SELECT * FROM tb_arqcontatos WHERE id = {$id_contato}";
$listaContatos = mysqli_query($conexao , $sqlBusca);
$nome = $email = $telefone = $cidade = $assunto = "";
while($contato = mysqli_fetch_assoc($listaContatos)){
    $nome = $contato['nome'];
    $email = $contato['email'];
    $telefone = $contato['telefone'];
    $cidade = $contato['cidade'];
    $assunto = $contato['assunto'];
}
?>

<form name="contatos-formulario" method="post" action="contatos-alterar.php">
<input name="id_contato" type="hidden" value="<?php echo $id_contato ; ?>">
<div class="container text-center  bg-light mt-4">
          <div class="row">
          <h1>alteração de contatos </h1>
          <div class=" col-lg-6 text-center fs-3">
            <label for="nome">nome</label>
            <input type="name" class="form-control" id="nome" placeholder="" name="nome" value="<?php echo $nome ; ?>">
          </div>
          <div class="col-lg-6  text-center fs-3">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $email ; ?>">
            </div>
          </div>
          <div class="row">
        <div class=" col-lg-6 text-center fs-3">
          <label for="number">telefone</label>
          <input type="numero" class="form-control" id="numero" name="telefone"placeholder="" value="<?php echo $telefone ; ?>">
        </div>
        <div class="col-lg-6 text-center fs-3">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade"  value="<?php echo $cidade ; ?>">
      </div>
          </div>
        <div class="row">
          <div class="col-lg-6 text-center fs-3">
            <label>assunto </label>
          <select class="form-select" aria-label="Default select example" name="assunto" id="assunto" value="<?php echo $assunto ; ?>">
            <option selected>especifique o tipo de serviço</option>
            <option value="construcao">construção</option>
            <option value="reformas">reformas </option>
            <option value="duvidas">duvidas</option>
          </select>
          </div>
        <div class="col-lg-6 text-center fs-3">
        <label for="nome">mensagem</label>
        <textarea type="text" class="form-control" id="mensagem" placeholder="" name="mensagem" value="<?php echo $mensagem ; ?>"></textarea>
        <div class="row mt-2">
        </div></div>
        <div class="botao tex-white text-decoration-none">
        <button type="submit" class=" btn btn-primary fs-5 col-md-2">enviar</button>
        <br>
        <li><a href="https://www.facebook.com/marcelo.vinicius.14019338/"><i class="bi bi-facebook"></i></a></li>
 <li><a href="https://www.instagram.com/marcelo.vini12/?hl=pt-br"><i class="bi bi-instagram "></i></a></li>
 <li><a href="https://api.whatsapp.com/send?phone=5519997342903&text=ola%20marcelo%20"><i class="bi bi-whatsapp"></i></a></li>
 <li><a href="https://github.com/marceloVinicius12"><i class="bi bi-github "></i></a><li>
        <div class="mt-3"></div>
<div class="row">
  <div class="redes text-center">
    <p>viniciusmarcello12@gmail.com</p>

        </div>
        </div>          
      </form>
      </body>
      <?php include "../includes/rodape-pastas.php"
      ?>