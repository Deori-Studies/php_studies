<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/dark_theme/prism.css">
  <link rel="stylesheet" href="../../src/dark_theme/style.css">
  <title>Me livrando da maldição</title>
</head>
<body>
  <h1>
    <?php
      echo "Hello, world! \u{1F30E}";
    ?>
  </h1>
  <p>Livrai-me da maldição.</p>
  <p>
    <h2>Paturso</h2>
    <?php
      print "print \"E aí, print ou echo?\"<br>";
      echo "echo \"Preferiria enfrentar o pato do tamanho de um urso ou urso do tamanho de um pato?\"<br><br>";
    ?>
    <span class="atenção">Atenção: Existe diferença entre usar '', "" ou ``</span>
    <ul>
      <li>
        'Aspas simples': Quando usadas para delimitar uma string em um comando echo, o PHP não interpreta nenhuma variável ou caractere especial dentro da string. Tudo dentro das aspas simples é considerado como uma string literal. Por exemplo:
        <pre>
          <code class="language-php">
            $nome = "João";
            echo 'Olá, $nome!'; // imprime: Olá, $nome!
          </code>
        </pre>
      </li>
      <li>
        Aspas duplas ("") - Quando usadas para delimitar uma string em um comando echo, o PHP interpreta variáveis e caracteres especiais, como as sequências de escape \n para nova linha e \t para tabulação. Por exemplo:
        <pre>
          <code class="language-php">
            $nome = "João";
            echo "Olá, $nome!"; // imprime: Olá, João!
          </code>
        </pre>
      </li>
      <li>
        Acento grave ou crase (``) - Quando usados para delimitar uma string em um comando echo, o PHP interpreta variáveis, caracteres especiais e permite a inclusão de expressões PHP dentro da string, usando a sintaxe ${expressão}. Por exemplo:
        <pre>
          <code class="language-php">
            $valor = 100;
            echo "O valor é: ${valor} reais"; // imprime: O valor é: 100 reais
          </code>
        </pre>
      </li>
    </ul>
  </p>
  <p>
    Em resumo, as aspas simples são úteis quando você tem uma string literal e não precisa de nenhuma interpretação ou substituição de variáveis. As aspas duplas são úteis quando você precisa incluir variáveis em uma string. Já o acento grave é útil quando você precisa incluir variáveis e expressões PHP em uma string.
  </p>
  <h2>Tags</h2>
  <p>
    PHP já teve duas formas:
  </p>
  <table>
    <tr>
      <th>tags</th>
      <th>nome</th>
      <th>uso</th>
      <th>Última versão</th>
    </tr>
    <tr>
      <td><code class="language-php">&lt;?php ?&gt;</code></td>
      <td>Super tag</td>
      <td>Padrão atual</td>
      <td>2.0 ou superior</td>
    </tr>
    <tr>
      <td><code class="language-php">&lt;?= "Echo" ?&gt;</code></td>
      <td>Short open tag</td>
      <td>Comando echo resumido</td>
      <td>5.4.0 ou superior</td>
    </tr>
    <tr>
      <td><code class="language-php">&lt;? ?&gt;</code></td>
      <td>Short tag</td>
      <td>Normalmente desabilitado - Funciona</td>
      <td>em php.ini|short_open_tag=On &lt; v5.4.0 &lt; em .htaccess|php_value short_open_tag 1 &lt; v8.0.0 </td>
    </tr>
      <td><code class="language-php">&lt;% %&gt;</code></td>
      <td>ASP tag</td>
      <td>Legado - Não funciona</td>
      <td>Versão anterior a 7.0.0 do PHP ("asp_tags = On" ativada)</td>
    </tr>
    <tr>
      <td><code class="language-php">&lt;script language="php"&gt;&lt;/script&gt;</code></td>
      <td>Script tag</td>
      <td>Legado - Não funciona</td>
      <td>Versão anterior a 7.0.0 do PHP</td>
    </tr>
  </table>
  <h2>PHP Online - SANDBOX pra brincar</h2>
  <p>
    Conheça a opção online para testar código php.<br>
    Inclusive é possível visualizar o html "renderizado".<br>
    Primeiro selecione a versão do PHP que você quer usar em <span class="c-bolder">PHP versions and Options</span>, logo abaixo da área para escrever o código.<br>
    Depois selecione em <span class="c-bolder">Other Options</span> em <span class="c-bolder">Output</span>, o radio button <span class="c-bolder">HTML</span>.
    <a href="https://onlinephp.io/">https://onlinephp.io/</a>
  </p>
  <script src="../../src/dark_theme/prism.js"></script>
</body>
</html>
