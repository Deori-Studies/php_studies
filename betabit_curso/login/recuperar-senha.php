<?php
  require('config/conexao.php');
?>

<?php
  if(isset($_GET['cod']) && !empty($_GET['cod'])) {
    $cod = limparPost($_GET['cod']);

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE recupera_senha=? LIMIT 1");
    $sql->execute(array($cod));
    $usuario = $sql->fetch();

    if($usuario) {
      $sql = $pdo->prepare("UPDATE usuarios SET senha=? WHERE recupera_senha=? LIMIT 1");
      if($sql->execute(array($senha_cript, $cod))){
        header('location: index.php');
      }
    } else {
      echo "Recuperação de senha inválida";      
    }
  } else {
    header('location: index.php');
  }

  if(isset($_POST['senha']) && isset($_POST['repete_senha'])) {
    if (empty($_POST['senha']) or empty($_POST['repete_senha'])) {
      $erro_geral = "Todos os campos são obrigatórios";
    } else {
      $senha = limparPost($_POST['senha']);
      $senha_cript = sha1($senha);
      $repete_senha = limparPost($_POST['repete_senha']);

      if(strlen($senha) < 6) {
        $erro_senha = "Senha deve ter no mínimo 6 caracteres";
      }

      if($senha !== $repete_senha) {
        $erro_repete_senha = "Senha e repetição de senha diferentes!";
      }

      if(!isset($erro_geral) && !isset($erro_senha) && !isset($erro_repete_senha)) {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");
        $sql->execute(array($email));
        $usuario = $sql->fetch();

        if(!$usuario) {
          $recupera_senha="";
          $token="";
          $codigo_confirmacao = uniqid();
          $status = "novo";
          $data_cadastro = date("d/m/Y");

          $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)");
          if($sql->execute(array($nome, $email, $senha_cript, $recupera_senha, $token, $codigo_confirmacao, $status, $data_cadastro))) {
            if ($modo == "local") {
              header('location: index.php?result=ok');
            } else if ($modo == "producao") {
              
              header('location: index.php');
            }
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
    <h1>Trocar a Senha</h1>

    <?php if (isset($erro_geral)) { ?>
        <div class="erro-geral animate__animated animate__rubberBand">
         <?php echo $erro_geral; ?>
        </div>
    <?php } ?>

    <div class="input-group">
      <img class="input-icon" src="img/lock.png" alt="">
      <input
        <?php if(isset($erro_geral) or isset($erro_senha)) { echo "class=\"erro-input\""; }?>
        <?php if(isset($_POST['senha'])) { echo "value=\"".$_POST['senha']."\""; }?>
          type="password" name="senha" id="senha" placeholder="Digite sua nova senha" required
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
          type="password" name="repete_senha" id="repete_senha" placeholder="Repita sua nova senha" required
        >
      <?php
        if(isset($erro_repete_senha)) {
          echo "<div class=\"erro\">$erro_repete_senha</div>";
        }
      ?>
    </div>
    <button class="btn-blue" type="submit">Alterar a senha</button>
  </form>
</body>
</html>
