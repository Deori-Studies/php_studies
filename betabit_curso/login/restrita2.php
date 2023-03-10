<?php
  require('config/conexao.php');

  $user = auth($_SESSION['TOKEN']);
  if ($user) {
      echo "<h1> Página restrita 2 ".$user['nome']."!<br><br>";
      echo "<a href=\"logout.php\">Sair do Sistema</a>";
  } else {
    header('location: index.php');
  }
?>