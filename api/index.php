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
  <title>Hello World em PHP</title>
</head>

<?php
  require "reset.php";
  require "prism.php";
  require "base.php";
  require "style.php";
  require "responsive.php";
?>

<body>
  <header>
    <h1>Hello World em PHP</h1>
    <p>Livrando-me da maldição</p>
    <nav>
      <a href="../../index.php"><button>Página Inicial</button></a>
      <a href="../ativ-001"><button>Próxima</button></a>
    </nav>
  </header>

  <main>
    <article>
      <h2>Sintaxe</h2>

      <section>
        <h3>Definir Código</h3>
        <p>Para demarcar o código php em seu html, use</p>
        <pre>
          <code class="language-php">
          &lt;?php // Código aqui ?&gt;
          </code>
        </pre>
      </section>

      <section>
        <h3>Como criar um Hello World?</h3>
        <pre>
          <code class="language-php">
            &lt;?php
              echo "Hello World! \u{1F30E}";
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <h4 class="code-result">
          <?php
            echo "Hello World! \u{1F30E}"
          ?>
        </h4>
        <p>
          <?php
            echo "Livrai-me da maldição!"
          ?>
        </p>
      </section>

      <section>
        <h3>Comentar em PHP</h3>
        <p>Para comentar em php, basta usar // ou # para comentários de linha, e /**/ para comentários de bloco</p>
        <pre>
          <code class="language-php">
            // Comentário de linha 1
            # Comentário de linha 2
            /*
            Comentário
            em
            bloco
            */
          </code>
        </pre>
      </section>

      <section>
        <h3>Concatenar strings em PHP</h3>
        <p>
          No js é comum utilizarmos "a" + "b" para concatenar a e b.
          porém em PHP utilizamos "a" . "b" para concatenar a e b, observe:
        </p>
        <pre>
          <code class="language-php">
            &lt;?php
              echo "A" . "B";
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <h4 class="code-result">
          <?php
            echo "A" . "B";
          ?>
        </h4>
        <p>
          <?php
            echo "Livrai-me da maldição!"
          ?>
        </p>
      </section>

      <section>
        <h3>Variáveis e Constantes</h3>
        <p>Usa-se $ para declarar variáveis e const NOME_VARIAVEL para constantes</p>
        <pre>
          <code class="language-php">
            &lt;?php
              $variavel = "variavel";
              const CONSTANTE = "CONSTANTE";
              echo "Eu sou $variavel e eu sou " . CONSTANTE;
            ?&gt;
          </code>
        </pre>
        <p>Observe que é necessário usar o operador . de concatenação</p>
        <p>Resultado:</p>
        <h3 class="code-result">
          <?php
            $variavel = "variavel";
            const CONSTANTE = "CONSTANTE";
            echo "Eu sou $variavel e eu sou " . CONSTANTE;
          ?>
        </h3>
        <h4>Curiosidades sobre Variáveis em PHP</h4>
        <p>Observe o código abaixo:</p>
        <pre>
          <code class="language-php">
            $xablau = "xablauzin";
            $$xablau = "Opa beleza?";
            echo "$xablauzin";
          </code>
        </pre>
        <p>Resultado:
        <p>
        <p class="code-result">
          <?php
            $xablau = "xablauzin";
            $$xablau = "Opa beleza?";
            echo "$xablauzin";
          ?>
        </p>
        <p>
          Perceba que o PHP interpreta o valor de $xablau e nomeia a variável
          e só depois atribui o valor a variável nomeada com o conteúdo de $xablau.
        </p>
        <h3>Case-Sensitive?</h3>
        <p>
          PHP é case-sensitive nas suas variávels, porém não é case-sensitive
          nos seus comandos, observe:
        </p>
        <pre>
          <code class="language-php">
            &lt;?php
              $numero = 1;
              $Numero = 2;
              $NUMERO = 3;
              echo "$numero Hello World! \u{1F30E}&lt;br&gt;";
              ECHO "$Numero Hello World! \u{1F30E}&lt;br&gt;";
              eCHo "$NUMERO Hello World! \u{1F30E}&lt;br&gt;";
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <h4 class="code-result">
          <?php
            $numero = 1;
            $Numero = 2;
            $NUMERO = 3;
            echo "$numero Hello World! \u{1F30E}<br>";
            ECHO "$Numero Hello World! \u{1F30E}<br>";
            eCHo "$NUMERO Hello World! \u{1F30E}<br>";
          ?>
        </h4>
      </section>

      <section>
        <h3>Estruturas de controle em PHP</h3>
        <pre>
          <code class="language-php">
            &lt;?php
              $algo = "alguma_coisa";
              if ($algo == "alguma_coisa") {
            ?&gt;
            &lt;h5&gt;algo é alguma_coisa&lt;/h5&gt;
            &lt;
              }
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $algo = "alguma_coisa";
            if ($algo == "alguma_coisa") {
          ?>
        <h5>algo é alguma_coisa</h5>
        <?php
            }
          ?>
        </p>
      </section>

      <section>
        <h3>Funções e escopo de variáveis</h3>
        <p>

        </p>
        <pre>
          <code class="language-php">
            &lt;?php
              $x = 10;
              $y = 20;

              function teste() {
                $x = 100;
                global $y, $z;
                $z = 30;
                echo "Escopo interno < x: $x | y: $y | z: $z ---- ";
              }

              teste();
              echo "Escopo Externo > x: $x | y: $y | z: $z"
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $x = 10;
            $y = 20;

            function teste() {
              $x = 100;
              global $y, $z;
              $z = 30;
              echo "Escopo interno < x: $x | y: $y | z: $z ---- ";
            }

            teste();
            echo "Escopo Externo > x: $x | y: $y | z: $z"
          ?>
        </p>
      </section>
    </article>

    <article>
      <section>
        <h3>Echo e Print</h3>
        <p>
          echo e print tem a mesma função de mandar informações para a tela;
        </p>
        <pre>
          <code class="language-php">
            &lt;?php
              print "E aí, print ou echo?<br>";
              echo "Preferiria enfrentar o pato do tamanho de um urso ou urso do tamanho de um pato?&lt;br&gt;&lt;br&gt;";
            ?&gt;
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            print "E aí, print ou echo?<br>";
            echo "Preferiria enfrentar o pato do tamanho de um urso ou urso do tamanho de um pato?<br><br>";
          ?>
        </p>
      </section>

      <section>
        <h3>Formatos de Strings</h3>
        <ul>
          <li>Double Quoted</li>
          <li>Single Quoted</li>
          <li>Heredoc</li>
          <li>Nowdoc</li>
        </ul>
        <h3>Double Quoted x Single Quoted</h3>
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
      </section>

      <section>
        <h3>Aspas dentro de aspas</h3>
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
      </section>

      <section>
        <h3>Sintaxe Heredoc</h3>
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
      </section>

      <section>
        <h3>Sintaxe Nowdoc</h3>
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
      </section>
    </article>

    <article>
      <h2>Manipulação de strings</h2>
      <section>
        <h3></h3>
        <pre>
          <code class="language-php">
            $frase = "Hello World x Olá Mundo!";

            echo "caracteres:" . strlen($frase) . "&lt;br&gt;";
            echo "palavras:" . str_word_count($frase) . "&lt;br&gt;";
            echo "Reverso:" . strrev($frase) . "&lt;br&gt;";
            echo "Posição de caractere de início de palavra:" . strpos($frase, "World") . "&lt;br&gt;";
            echo "Troca sequência de char:" . str_replace("-", "/", "01-01-2023") . "&lt;br&gt;";
          </code>
        </pre>
        <p>Resultado:</p>
        <p>
          <?php
            $frase = "Hello World x Olá Mundo!";

            echo "caracteres:" . strlen($frase) . "<br>";
            echo "palavras:" . str_word_count($frase) . "<br>";
            echo "Reverso:" . strrev($frase) . "<br>";
            echo "Posição de caractere de início de palavra:" . strpos($frase, "World") . "<br>";
            echo "Troca sequência de char:" . str_replace("-", "/", "01-01-2023") . "<br>";
          ?>
        </p>
      </section>
    </article>

    <article>
      <section>
        <h2>Tipagem</h2>
        <ul>
          <li>Dinamicamente tipada.</li>
          <li>Fracamente tipada.</li>
        </ul>
      </section>

      <section>
        <h3>Escalares</h3>
        <ul>
          <li>$sobrenome = "Silva" | string</li>
          <li>$idade = 27 | int ou integer</li>
          <li>$peso = 72.2 | float, double - tipo real só até 7.4</li>
          <li>$casado = true | bool ou boolean</li>
        </ul>
        <p>Observe que:</p>
        <ul>
          <li>0x1A | Hexadeciaml | INT</li>
          <li>02818 | Octal | INT</li>
          <li>0b1010 | Binário | INT</li>
          <li>3e2 | 3*10^2 | DOUBLE</li>
        </ul>
        <pre>
            <code class="language-php">
              $string_set = "String Set";
              $binary_number = 0b1010;
              $octal_number = 010;
              $decimal_number = 255;
              $hex_number = 0x1f;
              $pow_number = 3e2;
              // Outras formas
              $float_number = (float) "950";
              $float_number = (double) "950";
              // Removida na 7.4 VV
              $float_number = (real) "950";
              // Removida na 7.4 ^^
              $string_set = (string) "250";
              var_dump($string_set) // Mostra informações da variável
            </code>
          </pre>
        <p>Resultados: </p>
        <ul class="code-result">
          <?php
              $string_set = "String Set";
              $binary_number = 0b1010;
              $octal_number = 010;
              $decimal_number = 255;
              $hex_number = 0x1f;
              $pow_number = 3e2;
              echo "<li>";
              var_dump($string_set);
              echo "</li>";
              echo "<li>";
              var_dump($binary_number);
              echo "</li>";
              echo "<li>";
              var_dump($octal_number);
              echo "</li>";
              echo "<li>";
              var_dump($decimal_number);
              echo "</li>";
              echo "<li>";
              var_dump($hex_number);
              echo "</li>";
              echo "<li>";
              var_dump($pow_number);
              echo "</li>";
            ?>
        </ul>
      </section>

      <section>
        <h3>Curiosidades</h3>
        <p>
          Em PHP o valor booleano "true = 1" por padrão ou pode ser qualquer valor;<br>
          Já o valor booleano "false = vazio" por padrão ou pode ser 0, null;<br>
        </p>
      </section>

      <section>
        <h3>Compostos</h3>
        <ul>
          <li>array</li>
          <li>object</li>
        </ul>
        <pre>
          <code class="language-php">
          $vet = [6, 2.5, "Maria", 3, false];
            # echo "O vetor é $vet" // Array to string conversion não existe
            var_dump($vet);
            echo "&lt;br&gt;&lt;br&gt;";
            class carro { // Classe de objeto
              public $cor;
              public $modelo;
              public function __construct($cor, $modelo)
              {
                $this-&gt;cor = $cor;
                $this-&gt;modelo = $modelo;
              }
              public function mensagem() {
                return "O carro é um $this-&gt;modelo $this-&gt;cor &lt;br&gt;";
              }
            }
            $carro_1 = new carro("Preto", "Gol 3kilimei"); // Nova instância
            echo $carro_1-&gt;mensagem();
            var_dump($carro_1);
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $vet = [6, 2.5, "Maria", 3, false];
            # echo "O vetor é $vet" // Array to string conversion não existe
            var_dump($vet);
            echo "<br><br>";
            class carro { // Classe de objeto
              public $cor;
              public $modelo;
              public function __construct($cor, $modelo)
              {
                $this->cor = $cor;
                $this->modelo = $modelo;
              }
              public function mensagem() {
                return "O carro é um $this->modelo $this->cor <br>";
              }
            }
            $carro_1 = new carro("Preto", "Gol 3kilimei"); // Nova instância
            echo $carro_1->mensagem();
            var_dump($carro_1);
          ?>
        </p>
      </section>

      <section>
        <h3>Especiais</h3>
        <ul>
          <li>null</li>
          <li>resource</li>
          <li>callable</li>
          <li>mixed</li>
        </ul>
      </section>
    </article>
  </main>
  <script src="scriptprism.js"></script>
</body>

</html>