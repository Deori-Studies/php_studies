<?php
  require('config/conexao.php');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'config/PHPMailer/src/Exception.php'; // Mailer
  require 'config/PHPMailer/src/PHPMailer.php';
  require 'config/PHPMailer/src/SMTP.php';

  if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = limparPost($_POST['email']);
    $status="confirmado";
    $cod = sha1(uniqid());
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND status=? LIMIT 1");
    $sql->execute(array($email, $status));

    $usuario = $sql->fetch(PDO::FETCH_ASSOC); // Matriz associativa | Key Value

    if($usuario) {
      if($usuario['status'] === "confirmado") {
        $sql = $pdo->prepare("UPDATE usuarios SET recupera_senha=? WHERE email=?");
        if($sql->execute(array($cod, $email))) {

        }
      } else {
        $erro_usuario = "Houve uma falha!";
      }
    }

    if ($usuario) {
      $email = limparPost($_POST['email']);
      $cod = sha1(uniqid());

      $mail = new PHPMailer(true);
      try {
        //Recipients
        $mail->setFrom('sistema@emailsistema.com', 'Sistema de Login'); // Remetente
        $mail->addAddress($email, $nome);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Recuperar senha senha';
        $mail->Body    = '<h1>Agora você pode trocar a senha da sua conta</h1><br><br><a href="https://seusistema.com.br/recuperar-senha.php?cod_confirm=' . $cod . '>Confirmar E-mail</a>';
  
        $mail->send();
        echo 'Email enviado';
        header('location: ../email-enviado-recupera.php');
      } catch (Exception $e) {
          echo "Houve um problema ao enviar o email: {$mail->ErrorInfo}";
      }

      $sql = $pdo->prepare("UPDATE usuarios SET recuperar_senha=? WHERE email=?");
      if($sql->execute(array($cod, $email))) {
      }

      $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
      $sql->execute(array($email, $senha_cript));

      $usuario = $sql->fetch(PDO::FETCH_ASSOC); // Matriz associativa | Key Value
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
    <a href="cadastrar.php">Ainda não tenho cadastro</a>
    <button class="btn-blue" type="submit">Recuperar Senha</button>
    <a href="index.php">Voltar ao login</a>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>