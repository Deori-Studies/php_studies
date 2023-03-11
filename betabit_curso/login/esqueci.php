<?php
  require('config/conexao.php');

  if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = limparPost($_POST['email']);
    $status="confirmado";
    $cod = sha1(uniqid());
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND status=? LIMIT 1");
    $sql->execute(array($email, $status));

    $usuario = $sql->fetch(PDO::FETCH_ASSOC); // Matriz associativa | Key Value

    if ($usuario) {
      $email = limparPost($_POST['email']);
      $cod = sha1(unioqid());

      $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
      $sql->execute(array($email, $senha_cript));

      $usuario = $sql->fetch(PDO::FETCH_ASSOC); // Matriz associativa | Key Value

      if($usuario) {
        if($usuario['status'] === "confirmado") {
            enviarEmail($email, $nome, $cod);
      } else {
        $erro_usuario = "Houve uma falha ao buscar esse email!";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Esqueceu a senha</title>
</head>

<body>
  <form method="post">
    <h1>Recuperar Senha</h1>

    <p>Informe o email cadastrado no sistema</p>
    <div class="input-group">
      <img class="input-icon" src="img/user.png" alt="">
      <input type="email" name="email" id="email" placeholder="Digite seu email" required>
    </div>
    <button class="btn-blue" type="submit">Recuperar Senha</button>
    <a href="cadastrar.php">Ainda não tenho cadastro</a>
    <a href="index.php">Voltar ao login</a>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>