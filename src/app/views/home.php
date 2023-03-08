<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SKATING HARD - HOME</title>
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
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css" />
  </head>
  <body>
    <div class="container">
        <div class="barra">
            <div id="barra_botoes" class="botoes_esqueda">
                <button onclick="app.sair()">Sair</button>
                <button onclick="app.irCompras()">Compras</button>
                <button onclick="app.irLogin()">Login</button>
                <button onclick="app.irCadastro()">Criar Conta</button>
                <Text class="letra_barra" id="nome_usuario"></Text>
            </div>
        </div>
    </div>
    <img class="imagem_grande" width="100%" src="../../public/imagens/imagem_home.jpg" alt="">
    <h1>Produtos Disponiveis</h1>
    <section id="produtos" class="container">
        <!-- <div class="card">
        <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b>John Doe</b></h4> 
            <p>Architect & Engineer</p> 
        </div>
        </div> -->
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../assets/home.js"></script>
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
