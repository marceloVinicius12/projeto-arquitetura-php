<?php include "../includes/cabecalho-contato.php"; ?>
<form name="contatos" method="post" action="contatos-inserir.php">
        <div class="container text-center  bg-light mt-4">
          <div class="row ">
          <h1>contatos</h1>
          <div class=" col-lg-6 text-center fs-3">
            <label for="nome">nome</label>
            <input type="name" class="form-control" id="nome" placeholder="" name="nome">
          </div>
          <div class="col-lg-6  text-center fs-3">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="" name="email">
            </div>
          </div>
          <div class="row">
        <div class=" col-lg-6 text-center fs-3">
          <label for="number">telefone</label>
          <input type="numero" class="form-control" id="numero" name="telefone"placeholder="">
        </div>
        <div class="col-lg-6 text-center fs-3">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="Cidade" name="cidade">
      </div>
          </div>
        <div class="row">
          <div class="col-lg-6 text-center fs-3">
            <label>assunto </label>
          <select class="form-select" aria-label="Default select example" id="assunto" name="assunto">
            <option selected>especifique o tipo de serviço</option>
            <option value="construcao">construção</option>
            <option value="reformas">reformas </option>
            <option value="duvidas">duvidas</option>
          </select>
          </div>
        <div class="col-lg-6 text-center fs-3">
        <label for="nome">mensagem</label>
        <input type="text" class="form-control" id="mensagem" placeholder="" name="mensagem">
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
      <script src="../boostrap/bootstrap.min.js"></script>
