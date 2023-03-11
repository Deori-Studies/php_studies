<?php
 require('config/conexao.php');

  if (isset($_GET['cod_confirm']) && isset($_GET['cod_confirm'])) {
    $cod = limparPost($_GET['cod_confirm']);

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE codigo_confirmacao=? LIMIT 1");
    $sql->execute(array($cod));
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    if($usuario) {
      $sql = $pdo->prepare("UPDATE usuarios SET status=? WHERE codigo_confirmacao=?");
      if($sql->execute(array($status, $cod))) {
        $_SESSION['TOKEN'] = $token;
        header('location: index.php?result=ok');
      } 
    } else {
      echo "<h1>Código de confirmação inválido!</h1>";
    }
  }
?>