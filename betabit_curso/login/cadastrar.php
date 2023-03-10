<?php
  require('config/conexao.php');
?>

<?php
  if(isset($_POST['nome_completo']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['repete_senha'])) {
    if (empty($_POST['nome_completo']) or empty($_POST['email']) or empty($_POST['senha']) or empty($_POST['repete_senha']) or empty($_POST['termos'])) {
      $erro_geral = "Todos os campos são obrigatórios";
    } else {
      $nome = limparPost($_POST['nome_completo']);
      $email = limparPost($_POST['email']);
      $senha = limparPost($_POST['senha']);
      $senha_cript = sha1($senha);
      $repete_senha = limparPost($_POST['repete_senha']);
      $checkbox = limparPost($_POST['termos']);

      if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        $erro_nome = "Somente permitido letras e espaços em branco!";
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro_email = "Formato de email inválido!";
      }

      if(strlen($senha) < 6) {
        $erro_senha = "Senha deve ter no mínimo 6 caracteres";
      }

      if($senha !== $repete_senha) {
        $erro_repete_senha = "Senha e repetição de senha diferentes!";
      }

      if($checkbox !== "ok") {
        $erro_checkbox = "Desativado";
      }

      if(!isset($erro_geral) && !isset($erro_nome) && !isset($erro_senha) && !isset($erro_repete_senha) && !isset($erro_checkbox)) {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");
        $sql->execute(array($email));
        $usuario = $sql->fetch();

        if(!$usuario) {
          $recupera_senha="";
          $token="";
          $status = "novo";
          $data_cadastro = date("d/m/Y");

          $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
          if($sql->execute(array($nome, $email, $senha_cript, $recupera_senha, $token, $status, $data_cadastro))) {
            header('location: index.php?result=ok');
          }
        } else {
          $erro_geral = "Usuário já cadastrado";
        }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>Cadastrar</title>
</head>
<body>
  <form method="post">
    <h1>Cadastrar</h1>

    <?php if (isset($erro_geral)) { ?>
        <div class="erro-geral animate__animated animate__rubberBand">
         <?php echo $erro_geral; ?>
        </div>
    <?php } ?>

    <div class="input-group">
      <img class="input-icon" src="img/id-card.png" alt="">
      <input
        <?php if(isset($erro_geral) or isset($erro_nome)) { echo "class=\"erro-input\""; }?>
        <?php if(isset($_POST['nome_completo'])) { echo "value=\"".$_POST['nome_completo']."\""; }?>
        type="text" name="nome_completo" id="nome_completo" placeholder="Digite seu nome Completo" required
      >
      <?php
        if(isset($erro_nome)) {
          echo "<div class=\"erro\">$erro_nome</div>";
        }
      ?>
    </div>
    <div class="input-group">
      <img class="input-icon" src="img/user.png" alt="">
      <input
        <?php if(isset($erro_geral) or isset($erro_email)) { echo "class=\"erro-input\""; }?>
        <?php if(isset($_POST['email'])) { echo "value=\"".$_POST['email']."\""; }?>
        type="email" name="email" id="email" placeholder="Digite seu email" required
      >
      <?php
        if(isset($erro_email)) {
          echo "<div class=\"erro\">$erro_email</div>";
        }
      ?>
    </div>
    <div class="input-group">
      <img class="input-icon" src="img/lock.png" alt="">
      <input
        <?php if(isset($erro_geral) or isset($erro_senha)) { echo "class=\"erro-input\""; }?>
        <?php if(isset($_POST['senha'])) { echo "value=\"".$_POST['senha']."\""; }?>
          type="password" name="senha" id="senha" placeholder="Digite sua senha" required
        >
      <?php
        if(isset($erro_senha)) {
          echo "<div class=\"erro\">$erro_senha</div>";
        }
      ?>
    </div>
    <div class="input-group">
      <img class="input-icon" src="img/unlock.png" alt="">
      <input
        <?php if(isset($erro_geral) or isset($erro_repete_senha)) { echo "class=\"erro-input\""; }?>
        <?php if(isset($_POST['repete_senha'])) { echo "value=\"".$_POST['repete_senha']."\""; }?>
          type="password" name="repete_senha" id="repete_senha" placeholder="Repita sua senha" required
        >
      <?php
        if(isset($erro_repete_senha)) {
          echo "<div class=\"erro\">$erro_repete_senha</div>";
        }
      ?>
    </div>
    <div <?php if(isset($erro_geral) or isset($erro_checkbox)) { echo "class=\"erro-input\" \"input-check-group\""; } else { echo "class=\"input-check-group\""; } ?> >
      <input type="checkbox" name="termos" id="termos" value="ok" required>
      <label for="termos">
        Ao se cadastrar você concorda com a nossa
        <a class="link" href="">Política de Privacidade</a>
        e os nossos <a class="link" href="">Termos de Uso</a>.
      </label>
      <?php
        if(isset($erro_checkbox)) {
          echo "<div class=\"erro\">$erro_checkbox</div>";
        }
      ?>
    </div>
    <button class="btn-blue" type="submit">Cadastrar</button>
    <a href="index.php">Já tenho uma conta</a>
  </form>
</body>
</html>
