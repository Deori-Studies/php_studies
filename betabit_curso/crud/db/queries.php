<?php
  function inserirCliente($pdo, $nome, $email, $data) {
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null, ?, ?, ?)");
    $sql->execute(array($nome, $email, $data)); // Evitando SQL INJECTION
  }

  function buscarClientes($pdo) {
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();
    $dados = $sql->fetchAll();
    return $dados;
  }

  function buscarClientesOrdenandoLimitando($pdo) {
    $sql = $pdo->prepare("SELECT * FROM clientes ORDER BY id LIMIT 5");
    $sql->execute();
    $dados = $sql->fetchAll();
    return $dados;
  }

  function buscarClientesLimitandoSecao($pdo) {
    $sql = $pdo->prepare("SELECT * FROM clientes ORDER BY id LIMIT 8,4"); // Do 8+1 até +4
    $sql->execute();
    $dados = $sql->fetchAll();
    return $dados;
  }

  function buscarPorEmail($pdo, $email) {
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");
    $sql->execute(array($email));
    $dados = $sql->fetchAll();
    return $dados;
  }

  function atualizarCliente($pdo, $nome, $email, $data, $id,) {
    $sql = $pdo->prepare("UPDATE clientes SET nome=?, email=?, data_cadastro=? WHERE id=?");
    $sql->execute(array($nome, $email, $data, $id));
    return $sql;
  }

  function deletaCliente($pdo, $id, $nome, $email, $data_cadastro) {
    $sql = $pdo->prepare("DELETE FROM clientes WHERE id=? AND nome=? AND email=? AND data_cadastro=?");
    $sql->execute(array($id, $nome, $email, $data_cadastro));
    return $sql;
  }
?>
