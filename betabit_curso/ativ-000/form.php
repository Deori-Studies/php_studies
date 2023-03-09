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
  <title>Atividade 000</title>
</head>

<?php
  function xSiteFilter($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }
?>

<?php
  $errorName = "";
  $errorEmail = "";
  $errorPassword = "";
  $errorRepeat = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user'])) {
      $errorName = "Preencha o nome!";
    } else {
      $formName = xSiteFilter($_POST['user']);
      if(!preg_match("/^[a-zAZ-' ]*$/", $formName)) {
        $errorName = "Apenas letras e espaços!";
      };
    }

    if (empty($_POST['email'])) {
      $errorEmail = "Preencha o email";
    } else {
      $formEmail = xSiteFilter($_POST['email']);
      if(!filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "Email inválido!";
      };
    }

    if (empty($_POST['password'])) {
      $errorPassword = "Preencha a senha!";
    } else {
      $formPassword = xSiteFilter($_POST['password']);
      if(strlen($formPassword) < 8) {
        $errorPassword = "Senha mínima de 8 caracteres!";
      };
    }

    if (empty($_POST['repeat'])) {
      $errorRepeat = "Preencha a senha novamente!";
    } else {
      $formRepeat = xSiteFilter($_POST['repeat']);
      if($formPassword !== $formRepeat) {
        $errorRepeat = "Senhas não correspondem!";
      };
    }
  }
?>

<body>
  <article>
    <div>
      <h1>AULA PHP</h1>
      <h2>Validação de formulário</h2>
    </div>
    <form method="POST">
      <div>
        <label for="userName">Nome de usuário</label>
        <input type="text" id="userName" name="userName" placeholder="Digite nome usuário">
        <span class="error-message"><?php echo $errorName ?></span>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
        <span class="error-message"><?php echo $errorEmail ?></span>
      </div>
      <div>
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha">
        <span class="error-message"><?php echo $errorPassword ?></span>
      </div>
      <div>
        <label for="repeat">Repita Senha</label>
        <input type="password" id="repeat" name="repeat" placeholder="Repita a senha">
        <span class="error-message"><?php echo $errorRepeat ?></span>
      </div>
      <button type="submit">Enviar formulário</button>
    </form>
  </article>
</body>
</html>
