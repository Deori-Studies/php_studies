<?php
  session_start(); // Inicializa a sessão do navegador. Deixei aqui pois carrega em todas as páginas.

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  
  require 'PHPMailer/src/Exception.php'; // Mailer
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  $modo = "local";

  if ($modo == "local") {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "login";
  }
  
  if ($modo  == "producao") {
    $servidor = "";
    $usuario = "";
    $senha = "";
    $banco = "";
  }

  try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $erro) {
    echo "Falha ao se conectar com o banco";
  }

  function limparPost($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
  }

  function auth($tokenSessao) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE token=? LIMIT 1");
    $sql->execute(array($tokenSessao));
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
  
    if(!$usuario) {
      return false;
    } else {
      return $usuario;
    }
  }

  function enviarEmail($email, $nome, $codigo_confirmacao) {
    $mail = new PHPMailer(true);
    try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      // $mail->isSMTP();                                            //Send using SMTP
      // $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
      // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      // $mail->Username   = 'user@example.com';                     //SMTP username
      // $mail->Password   = 'secret';                               //SMTP password
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('sistema@emailsistema.com', 'Sistema de Login'); // Remetente
      $mail->addAddress($email, $nome);     //Add a recipient
      // $mail->addAddress('ellen@example.com');               //Name is optional
      // $mail->addReplyTo('info@example.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');
  
      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Confirme seu cadastro';
      $mail->Body    = '<h1>Confirme seu email abaixo</h1><br><br><a href="https://seusistema.com.br/confirmação.php?cod_confirm=' . $codigo_confirmacao . '>Confirmar E-mail</a>';
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Email enviado';
      header('location: ../obrigado.php');
    } catch (Exception $e) {
        echo "Houve um problema ao enviar o email: {$mail->ErrorInfo}";
    }
  }
?>
