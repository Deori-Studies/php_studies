<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "primeiro_banco";
  $tipo = "mysql";

  $pdo = new PDO("$tipo:host=$servidor;dbname=$banco", $usuario,$senha);
?>
