<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/style/reset.css">
  <link rel="stylesheet" href="../../src/util/prism/prism.css">
  <link rel="stylesheet" href="../../src/style/base.css">
  <link rel="stylesheet" href="../../src/style/style.css">
  <link rel="stylesheet" href="../../src/style/responsive.css">
  <title>Formulários com PHP - 1</title>
</head>

<body>
  <header>
    <h1>Formulários com PHP - Frontend</h1>
    <nav>
      <a href="/studies/006/"><button>Anterior</button></a>
      <a href="/studies/008/"><button>Próxima</button></a>
    </nav>
  </header>

  <section>
    <h2>Apresente-se para nós</h2>
    <form action="cad.php" method="get">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="idnome">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" name="sobrenome" id="idsobrenome">
      <input type="submit" value="Enviar">
    </form>
  </section>
  <article>
    <p>
      Observe a diferença na forma de envio entre GET e POST,
      Get é pela url o outro pelo body da requisição.
      O Post está tão exposto quanto o GET, basta saber procurar.
    </p>
  </article>
  <script src="../../src/util/prism/scriptprism.js"></script>
</body>

</html>
