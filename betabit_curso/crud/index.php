<?php
  require('db/conexao.php');
  require('db/queries.php');
  require('helpers/filters.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/style/reset.css">
  <link rel="stylesheet" href="../../src/util/prism/prism.css">
  <link rel="stylesheet" href="../../src/style/base.css">
  <link rel="stylesheet" href="../../src/style/style.css">
  <link rel="stylesheet" href="../../src/style/responsive.css">
  <title>Aula MySQL E PHP</title>
</head>
<body>
<h1>Aula MySQL E PHP</h1>
  <article id="article_salva">
    <h2>(C) Inserindo dados</h2>
    <form id="form_salva" method="post">
      <input type="text" name="nome" placeholder="Digite seu nome" required>
      <input type="email" name="email" placeholder="Digite seu email" required>
      <button type="submit" name="salvar">Salvar</button>
    </form>

    <?php
      // Inserir
      if (isset($_POST['salvar']) && isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = antiXSite($_POST['nome']);
        $email = antiXSite($_POST['email']);
        $data = date('d-m-Y');

        if ($nome=="" || $nome==null) {
          echo "<span class=\"error-message\">Nome não pode ser vazio</span>";
          exit();
        }

        if ($email=="" || $email==null) {
          echo "<span class=\"error-message\">Email não pode ser vazio</span>";
          exit();
        }

        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
          echo "<span class=\"error-message\">Somente letras e espaços em branco para o nome</span>";
          exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<span class=\"error-message\">Formato inválido de email</span>";
          exit();
        }

        inserirCliente($pdo, $nome, $email, $data);

        echo "<span class=\"success-message\">Cliente inserido com sucesso</span>";
      }
    ?>
  </article>

  <article id="article_atualiza" class="hidden">
    <h2>(U) Atualizando dados</h2>
    <form id="form_atualiza" method="post">
      <input type="hidden" id="id_editado" name="id_editado" placeholder="Preencha o id" required>
      <input type="text" id="nome_editado" name="nome_editado" placeholder="Editar seu nome" required>
      <input type="email" id="email_editado" name="email_editado" placeholder="Editar seu email" required>
      <button type="submit" name="atualizar">Atualizar</button>
      <button type="button" id="cancelar" name="cancelar">Cancelar</button>
    </form>
  </article>

  <article id="article_deleta" class="hidden">
    <h2>(D) Apagando dados</h2>
    <form id="form_deleta" method="post">
      <input type="hidden" id="id_deleta" name="id_deleta" placeholder="Preencha o id" required>
      <input type="text" id="nome_deleta" name="nome_deleta" placeholder="deletar seu nome" required>
      <input type="email" id="email_deleta" name="email_deleta" placeholder="deletar seu email" required>
      <input type="hidden" id="data_deleta" name="data_deleta" required>
      <p><b>Tem certeza  que quer deletar cliente <span id="span_client_info"></span></b></p>?
      <button type="submit" name="deletar">Deletar</button>
      <button type="button" id="cancelar_delete" name="cancelar_delete">Cancelar</button>
    </form>
  </article>

  <?php
    if(isset($_POST['atualizar']) && isset($_POST['id_editado']) && isset($_POST['nome_editado']) && isset($_POST['email_editado'])) {
      $id = antiXSite($_POST['id_editado']);
      $nome = antiXSite($_POST['nome_editado']);
      $email = antiXSite($_POST['email_editado']);
      $data = date('d-m-Y');

      if ($nome=="" || $nome==null) {
        echo "<span class=\"error-message\">Nome não pode ser vazio</span>";
        exit();
      }

      if ($email=="" || $email==null) {
        echo "<span class=\"error-message\">Email não pode ser vazio</span>";
        exit();
      }

      if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
        echo "<span class=\"error-message\">Somente letras e espaços em branco para o nome</span>";
        exit();
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class=\"error-message\">Formato inválido de email</span>";
        exit();
      }

      $response = atualizarCliente($pdo, $nome, $email, $data, $id,);

      echo "<span class=\"success-message\">Atualizado " . $response->rowCount() . " registro(s)</span>";
    }
  ?>

  <?php
    if(isset($_POST['deletar']) && isset($_POST['id_deleta']) && isset($_POST['nome_deleta']) && isset($_POST['email_deleta'])) {
      $id = antiXSite($_POST['id_deleta']);
      $nome = antiXSite($_POST['nome_deleta']);
      $email = antiXSite($_POST['email_deleta']);
      $data_cadastro = $_POST['data_deleta'];

      $response = deletaCliente($pdo, $id, $nome, $email, $data_cadastro);
      echo "<span class=\"success-message\">" . $response->rowCount() . " registro(s) deletado(s)</span>";
    }
  ?>

  <article>
    <h2>(R) Lendo dados</h2>
          <?php
            $clientes = buscarClientes($pdo);
            if(count($clientes) > 0) {

              echo "
                <div class=\"overflow-scroll\">
                  <table>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data Cadastro</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
              ";

              foreach ($clientes as $cliente) {
                echo "<tr>";
                echo "<td>".$cliente['id']."</td>";
                echo "<td>".$cliente['nome']."</td>";
                echo "<td>".$cliente['email']."</td>";
                echo "<td>".$cliente['data_cadastro']."</td>";
                echo "
                  <td>
                    <a class=\"btn-atualizar\" data-id=\"".$cliente['id']."\" data-nome=\"".$cliente['nome']."\" data-email=\"".$cliente['email']."\" data-data_cadastro=\"".$cliente['data_cadastro']."\">Atualizar</a>
                    |
                    <a class=\"btn-deletar\" data-id=\"".$cliente['id']."\" data-nome=\"".$cliente['nome']."\" data-email=\"".$cliente['email']."\" data-data_cadastro=\"".$cliente['data_cadastro']."\">Deletar</a>
                  </td>";
                echo "</tr>";
              }

              echo "
                    </tbody>
                  </table>
                </div>
              ";

            } else {
              echo "<p> Nenhum cliente cadastrado</p>";
            }
          ?>
  </article>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(".btn-atualizar").click(function() { // Só funciona com function() oshe
      const id = $(this).attr('data-id');
      const nome = $(this).attr('data-nome');
      const email = $(this).attr('data-email');
      const data = $(this).attr('data-data_cadastro');

      $('#article_salva').addClass('hidden');
      $('#article_atualiza').removeClass('hidden');

      $('#id_editado').val(id);
      $('#nome_editado').val(nome);
      $('#email_editado').val(email);
      $('#data_editado').val(data);
      // alert(`id:${id} | nome:${nome} | email:${email} | data:${data}`);
    });
  
    $(".btn-deletar").click(function() { // Só funciona com function() oshe
      const id = $(this).attr('data-id');
      const nome = $(this).attr('data-nome');
      const email = $(this).attr('data-email');
      const data = $(this).attr('data-data_cadastro');

      $('#id_deleta').val(id);
      $('#nome_deleta').val(nome);
      $('#email_deleta').val(email);
      $('#data_deleta').val(data);
      $("#span_client_info").html(`${id} - ${nome} || ${email} de ${data}`);

      $('#article_salva').addClass('hidden');
      $('#article_atualiza').addClass('hidden');
      $('#article_deleta').removeClass('hidden');

      // alert(`id:${id} | nome:${nome} | email:${email} | data:${data}`);
    });

    $("#cancelar").click(function() {
      $('#article_salva').removeClass('hidden');
      $('#article_atualiza').addClass('hidden');
    });
    
    $("#cancelar_delete").click(function() {
      $('#article_salva').removeClass('hidden');
      $('#article_deleta').addClass('hidden');
    });
  </script>
</body>
</html>