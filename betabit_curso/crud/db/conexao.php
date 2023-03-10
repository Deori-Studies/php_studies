<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "primeiro_banco";
  $tipo = "mysql";

  try { // Medida de segurança
    $pdo = new PDO("$tipo:host=$servidor;dbname=$banco", $usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $erro) {
    echo "Falha ao se conectar com o banco!"; # . $erro->getMessage(); // Se quiser...
  }
?>
