<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SKATING HARD - CONTA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center p-5">
        <div class="col-sm-6">
          <h5>Formulario</h5>
          <hr />
          <form action="javascript:void(0);" onsubmit="app.alterarConta()" onreset="app.cancel()">
            <input type="hidden" id="id" />
            <label for="nombres">Nome</label>
            <input
              type="text"
              class="form-control"
              id="nome"
              placeholder="Nome sobrenome"
              autofocus
              required
            />
            <label for="data">Data de Nascimento</label>
            <input
              type="date"
              class="form-control"
              id="data"
              autofocus
              required
            />
            <label for="email">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="email@email.com"
              required
            />
            <label for="login">Login</label>
            <input
              type="text"
              class="form-control"
              id="login"
              placeholder="nome_de_usuario"
              autofocus
              required
            />
            <label for="senha">Senha</label>
            <input
              type="password"
              class="form-control"
              id="senha"
              placeholder="nome123"
              autofocus
              required
            />
            <br />
            <div>
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button onclick="app.excluirConta()" class="btn btn-danger">Excluir conta</button>
              <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../assets/conta.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
