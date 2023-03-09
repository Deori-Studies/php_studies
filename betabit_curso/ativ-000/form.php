<?php
  $formName = "";
  $formEmail = "";

  $errorName = "";
  $errorEmail = "";
  $errorPassword = "";
  $errorRepeat = "";

  $classNameArray = [];
  $classEmailArray = [];
  $classPasswordArray = [];
  $classRepeatArray = [];

  $classInputError = "red-border";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
      $errorName = "Preencha o nome!";
    } else {
      $formName = xSiteFilter($_POST['name']);
      if(!preg_match("/^[a-zA-Z-' ]*$/", $formName)) {
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
    } else if(strlen($formPassword) < 8) {
      $errorRepeat = "Senha mínima de 8 caracteres!";
    } else {
      $formRepeat = xSiteFilter($_POST['repeat']);
      if($formPassword !== $formRepeat) {
        $errorRepeat = "Senhas não correspondem!";
      };
    }

    if ($errorName !== "") {
      array_push($classNameArray, $classInputError);
    }

    if ($errorEmail !== "") {
      array_push($classEmailArray, $classInputError);
    }

    if ($errorPassword !== "") {
      array_push($classPasswordArray, $classInputError);
    }

    if ($errorRepeat !== "") {
      array_push($classRepeatArray, $classInputError);
    }

    if(($errorName == "") && ($errorEmail == "") && ($errorPassword == "") && ($errorRepeat == "")) {
      header('Location: process.php');
    }
  }
?>

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

<body>
  <article>
    <div>
      <h1>AULA PHP</h1>
      <h2>Validação de formulário</h2>
    </div>
    <form method="post">
      <div>
        <label for="name">Nome de usuário</label>
        <input type="text" id="name" name="name" placeholder="Digite nome usuário" <?php echo "class=\""; foreach($classNameArray as $class) { echo $class; } echo "\""; echo "value=\"".$formName."\"";?>>
        <span class="error-message"><?php echo $errorName ?></span>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" <?php echo "class=\""; foreach($classEmailArray as $class) { echo $class; } echo "\""; echo "value=\"".$formEmail."\"";?>>
        <span class="error-message"><?php echo $errorEmail ?></span>
      </div>
      <div>
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" <?php echo "class=\""; foreach($classPasswordArray as $class) { echo $class; } echo "\"";?>>
        <span class="error-message"><?php echo $errorPassword ?></span>
      </div>
      <div>
        <label for="repeat">Repita Senha</label>
        <input type="password" id="repeat" name="repeat" placeholder="Repita a senha" <?php echo "class=\""; foreach($classRepeatArray as $class) { echo $class; } echo "\"";?>>
        <span class="error-message"><?php echo $errorRepeat ?></span>
      </div>
      <button type="submit">Enviar formulário</button>
    </form>
  </article>
</body>
</html>
