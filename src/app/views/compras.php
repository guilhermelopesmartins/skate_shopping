<!doctype html>
<html lang="en">

<head>
  <title>SKATING HARD - COMPRAS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css" />
</head>

<body>
  <div class="container">
      <div class="barra">
        <div id="botoes" class="botoes_esqueda">
        <button id="botaoSair" onclick="app.sair()">Sair</button>
        <button id="botaoHome" onclick="app.irHome()">Home</button>
        <button id="botaoConta" onclick="app.irConta()">Conta</button>
        <Text id="nome_usuario" class="letra_barra"></Text>
        </div>
  </div>
  <h1 style="margin-top:50px;" id=titulo></h1>

  <section id="compras" class="container">

  </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="../assets/compras.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>