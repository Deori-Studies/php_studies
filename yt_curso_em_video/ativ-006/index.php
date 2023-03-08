<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/style/reset.css">
  <link rel="stylesheet" href="../../src/util/prism/prism.css">
  <link rel="stylesheet" href="../../src/style/base.css">
  <link rel="stylesheet" href="../../src/style/style.css">
  <link rel="stylesheet" href="../../src/style/responsive.css">
  <title>Manipulação de strings - PHP</title>
</head>

<body>

  <header>
    <h1>Manipulação de Strings - PHP</h1>
    <nav>
      <input type="button" value="Próxima">
      <input type="button" value="Anterior">
    </nav>
  </header>
  <main>
    <article>
      <h2>Formatos de Strings</h2>
      <ul>
        <li>Double Quoted</li>
        <li>Single Quoted</li>
        <li>Heredoc</li>
        <li>Nowdoc</li>
      </ul>
    </article>

    <article>
      <h2>Double Quoted x Single Quoted</h2>
      <pre>
        <code class="language-php">
          $phpdq = "PHP \u{1F418}"; // Double quoted interpreta o conteúdo;
          $phpsq = 'PHP \u{1F418}'; // Single Quoted não interpreta o conteúdo;
          echo "echo aspas duplas: $php_dq";
          echo "echo aspas duplas: $php_sq";
          echo 'echo aspas simples: $php_dq';
          echo 'echo aspas simples: $php_sq';
          $nome = "Gabriel";
          echo "echo aspas duplas: Olá $nome";
          echo 'echo aspas simples: Olá $nome';
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
        $php_dq = "PHP \u{1F418}";
        $php_sq = 'PHP \u{1F418}';
        echo "var aspas duplas e echo aspas duplas: $php_dq<br>";
        echo "var aspas simples e echo aspas duplas: $php_sq<br>";
        echo 'var aspas duplas e echo aspas simples: $php_dq<br>';
        echo 'var aspas simples e echo aspas simples: $php_sq<br><br>';
        $nome = "Gabriel";
        echo "echo aspas duplas: Olá $nome<br>";
        echo 'echo aspas simples: Olá $nome<br>';
      ?>
      </p>
    </article>

    <article>
      <h2>Concatenação de String</h2>
      <pre>
        <code class="language-php">
          $curso = 'curso ' . "PHP \u{1F418}"; // As aspas diferentes são apenas pra demonstrar
          echo $curso;
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
        $curso = 'curso ' . "PHP \u{1F418}";
        echo $curso;
      ?>
      </p>
    </article>

    <article>
      <h2>Concatenando constantes</h2>
      <pre>
        <code class="language-php">
          const ESTADO = "Minas Gerais";
          echo "Meu estado é ESTADO&lt;br&gt;";
          echo 'Meu estado é ESTADO&lt;br&gt;';
          echo `Meu estado é ESTADO&lt;br&gt;`;
          echo 'Jeito correto é:&lt;br&gt;';
          echo 'Meu estado é '.ESTADO."&lt;br&gt;";
        </code>
      </pre>
      <p class="code-result">
        <?php
        const ESTADO = "Minas Gerais";
        echo "Meu estado é ESTADO<br>";
        echo 'Meu estado é ESTADO<br>';
        echo `Meu estado é ESTADO<br>`;
        echo 'Jeito correto é:<br>';
        echo 'Meu estado é '.ESTADO."<br>";
      ?>
      </p>
    </article>

    <article>
      <h2>Aspas dentro de aspas</h2>
      <pre>
        <code class="language-php">
          $nome = "Gabriel";
          $snome = "De Oliveira Ribeiro";
      
          # echo "$nome "DEORI" $snome&lt;br&gt;"; // Isso aqui vai dar erro
          echo '$nome "DEORI" $snome&lt;br&gt;'; // Semântica incorreta
          echo "$nome \"DEORI\" $snome&lt;br&gt;"; // \ Ignora sintaxe de próximo caracter
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
        $nome = "Gabriel";
        $snome = "De Oliveira Ribeiro";
        # echo "$nome "DEORI" $snome<br>"; // Isso aqui vai dar erro
        echo '$nome "DEORI" $snome<br>'; // Semântica incorreta
        echo "$nome \"DEORI\" $snome<br>"; // \ Sequência de escape
      ?>
      </p>
      <p>
        Nas aspas simples apenas \' funciona como sequência de escaope<br>
        Nas aspas duplas porém:
      </p>
      <ul>
        <li>\n - Nova linha</li>
        <li>\t - Tabulação Horizontal</li>
        <li>\ - Barra invertida</li>
        <li>$ - Sinal de sifrão</li>
        <li>\u{} - Codepoint Unicode</li>
      </ul>
      <h3>Exemplos</h3>
      <pre>
        <code class="language-php">
          $nome = "Gabriel";
          $snome = "de Oliveira Ribeiro";
          $apelido = "DEORI";
          echo '$nome \'$apelido\' $snome&lt;br&gt;';
          echo "$nome \"$apelido\" $snome&lt;br&gt;";
          echo "$nome \"$apelido\" $snome&lt;br&gt;";
          echo "$nome:\t$nome \n \"$apelido\":\t$apelido \n $snome:\t$snome&lt;br&gt;"
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
      $nome = "Gabriel";
      $snome = "de Oliveira Ribeiro";
      $apelido = "DEORI";
      echo '$nome \'$apelido\' $snome<br>';
      echo "$nome \"$apelido\" $snome<br>";
      echo "$nome \"$apelido\" $snome<br>";
      echo "$nome:\t$nome \n \"$apelido\":\t$apelido \n $snome:\t$snome<br>"
      ?>
      </p>
    </article>

    <article>
      <h2>Sintaxe Heredoc</h2>
      <p>
        Dá pra quebrar linhas no formato texto (Não em HTML), mantém espaçamentos e interpreta<br>
        Observe a sintaxe:
      </p>
      <pre>
        <code class="language-php">
          $curso = "PHP";
          $ano = date('Y');
          echo &lt;&lt;&lt; FRASE
          FRASE;
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
          Estou estudando
            $curso em $ano!
        SHOWW
        FRASE;
      ?>
      </p>
    </article>

    <article>
      <h2>Sintaxe Nowdoc</h2>
      <p>
        Dá pra quebrar linhas no formato texto (Não em HTML), mantém espaçamentos e não interpreta<br>
        Observe a sintaxe:
      </p>
      <pre>
        <code class="language-php">
        $curso = "PHP";
        $ano = date('Y');
        echo &lt;&lt;&lt; 'FRASE'
          Estou estudando
            $curso em $ano!
        SHOWW
        FRASE;
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
        $curso = "PHP";
        $ano = date('Y');
        echo <<< 'FRASE'
          Estou estudando
            $curso em $ano!
        SHOWW
        FRASE;
      ?>
      </p>
    </article>
  </main>
  <script src="../../src/util/prism/prism.js"></script>
</body>

</html>
