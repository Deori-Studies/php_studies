<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/style/reset.css">
  <link rel="stylesheet" href="../src/util/prism/prism.css">
  <link rel="stylesheet" href="../src/style/base.css">
  <link rel="stylesheet" href="../src/style/style.css">
  <link rel="stylesheet" href="../src/style/responsive.css">
  <title>Hello World em PHP</title>
</head>

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
              $variavel = "variavel";
              const CONSTANTE = "CONSTANTE";
              define("DEFINECONST", "Fui criado com a função define.");
              echo "Eu sou $variavel e eu sou " . CONSTANTE . " | " . DEFINECONST;
              echo("&lt;br&gt;");
              define("CONST_ARRAY", [1, 2, 4, 7]);
              echo "Arrays constantes só existem em versão 7 ou acima.<br>";
              # Atenção define aceitava 3 parâmetros
              # mas na versão 7.3 deixou de aceitar
              # Era o último parâmetro, tipo bool para dizer se
              # o nome da const ia ser case-sensitive ou não.
              # define("eXeMplO", "oi", false);
          </code>
        </pre>
        <p>Observe que é necessário usar o operador . de concatenação</p>
        <p>Resultado:</p>
        <h3 class="code-result">
          <?php
              $variavel = "variavel";
              const CONSTANTE = "CONSTANTE"; # CONSTANTES SÃO GLOBAIS
              define("DEFINECONST", "Fui criado com a função define.");
              echo "Eu sou $variavel e eu sou " . CONSTANTE . " | " . DEFINECONST;
              echo "<br>";
              define("CONST_ARRAY", [1, 2, 4, 7]);
              echo "Arrays constantes só existem em versão 7 ou acima.<br>";
              # Atenção define aceitava 3 parâmetros
              # mas na versão 7.3 deixou de aceitar
              # Era o último parâmetro, tipo bool para dizer se
              # o nome da const ia ser case-sensitive ou não.
              # define("eXeMplO", "oi", false);
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
        <p class="code-result">
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

    <article>
      <h2>Operadores e manipulação</h2>
      <a href="https://www.php.net/manual/pt_BR/language.operators.php">
        Manual - Operadores em PHP
      </a>
      <section>
        <h3>Operadores aritméticos</h3>
        <ul>
          <li>+$a identidade | Conversão de $a para int ou float conforme apropriado.</li>
          <li>-$a negação | Oposto de $a.</li>
          <li>$a + $b adição | Soma de $a e $b.</li>
          <li>$a - $b subtração | Diferença entre $a e $b.</li>
          <li>$a * $b multiplicação | Produto de $a e $b.</li>
          <li>$a ** $b exponenciação | Resultado de $a elevado a $b. APENAS PHP 5.6.0 ou maior</li>
          <li>$a / $b divisão | Quociente de $a e $b.</li>
          <li>$a % $b módulo | Resto de $a dividido por $b | Mesmo sinal de $a</li>
        </ul>
      </section>
      <section>
        <h3>Operadores de sequência(concatenação) e observações sobre operadores aritméticos</h3>
        <p>
          O operador + não tem sobrecarga de funções, serve apenas para somar,
          mas pelo que parece ele converte string numéricas em números, soma
          e devolve em int ou float.<br>
          <br>
          Da versão 7 e anteriores ele aceita somar duas strings não numéricas,
          ele assume valor 0 para qualquer string não numérica e soma.

        <pre>
            <code class="language-php">
              // Versão 7 e anteriores  
              $result = "101 dálmatas" + "10 dólares";
              echo $result;
              // Resultado: int(111);
              // Porém só entende os primeiros números
              $result = "101 dálmatas" + "nota 10";
              echo $result;
              // Resultado: int(101);
            </code>
          </pre>
        </p>
        <pre>
          <code class="language-php">
            $result = "2" + "2";
            echo "Usando + &lt;br&gt;";
            var_dump($result);
            echo "&lt;br&gt;";
            $result = "4.1" + "2.3";
            var_dump($result);
            echo "&lt;br&gt;";
            echo "Usando .&lt;br&gt;";
            $result = "2" . "2";
            var_dump($result);
          </code>
      </pre>
        <p>Resultado:</p>

        <p class="code-result">
          <?php
          $result = "2" + "2";
          echo "Usando + <br>";
          var_dump($result);
          echo "<br>";
          $result = "4.1" + "2.3";
          var_dump($result);
          echo "<br><br>";
          echo "Usando .<br>";
          $result = "2" . "2";
          var_dump($result);
        ?>
        </p>
      </section>

      <section>
        <h3>Operadores de atribuição</h3>
        <a href="https://www.php.net/manual/pt_BR/language.operators.assignment.php">
          Operadores de atribuição
        </a>

        <p>Aceita combinação do operador de atribuição "=" com operadores aritméticos</p>
        <p>
          <?php
            $a = 2;
            echo "a = 2: $a<br>";
            $b = ($a = 4) + 5;
            echo "a: $a | b: $b<br>";
            $a += 5;
            echo "a + 5: $a<br>";
            $a -= 1;
            echo "a - 1: $a<br>";
            $a *= 2;
            echo "a * 2: $a<br>";
            $a /= 3;
            echo "a /3: $a<br>";
            $b = "Bom ";
            echo "b: $b<br>";
            $b .= "Dia!";
            echo "b.Dia: $b<br>";
            $a = 3;
            $b = &$a; // $b é uma referência de $a

            print "$a\n"; // imprime 3
            print "$b\n"; // imprime 3
            $a = 4; // modificamos $a
            print "$a\n"; // imprime 4
            print "$b\n"; // imprime 4 também, pois $b é uma referência de $a, que foi
                          // modificada
          ?>
        </p>
      </section>

      <section>
        <h3>Tabela de operadores resumida</h3>
        <p>Como são muitos operadores a tabela abaixo fará um resumo básico</p>
        <div class="overflow-scroll">
          <table>
            <thead>
              <tr>
                <th>Tipo</th>
                <th>Operadores</th>
                <th>Descrição</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="#">Operadores Aritméticos</a>
                </td>
                <td>
                  +, -, *, /, %, **, ++, --
                </td>
                <td>
                  Realizam operações matemáticas básicas, como adição, subtração, multiplicação e divisão.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de Atribuição</a>
                </td>
                <td>
                  =, +=, -=, *=, /=, %=, **=
                </td>
                <td>
                  Atribuem valores a variáveis, geralmente em combinação com operadores aritméticos.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores bit a bit (bitwise)</a>
                </td>
                <td>
                  &, |, ^, ~, <<,>>
                </td>
                <td>
                  Realizam operações em nível de bits em valores numéricos.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de Comparação</a>
                </td>
                <td>
                  ==, !=, ===, !==, <,>, <=,>=, <=>, ??, ?:
                </td>
                <td>
                  Compararam valores e retornam verdadeiro ou falso.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de controle de erro</a>
                </td>
                <td>
                  @
                </td>
                <td>
                  Suprime mensagens de erro para uma expressão específica.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de Execução</a>
                </td>
                <td>
                  ``, shell_exec(), system(), exec(), passthru()
                </td>
                <td>
                  Executam comandos em um shell do sistema operacional.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de Incremento/Decremento</a>
                </td>
                <td>
                  ++, --
                </td>
                <td>
                  Incrementam ou decrementam o valor de uma variável em uma unidade.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores Lógicos</a>
                </td>
                <td>
                  &&, ||, !, and, or, xor
                </td>
                <td>
                  Realizam operações lógicas em valores booleanos ou valores que podem ser convertidos em booleanos.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de String</a>
                </td>
                <td>
                  ., .=
                </td>
                <td>
                  Concatenam ou atribuem strings.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de Arrays</a>
                </td>
                <td>
                  +,
                </td>
                <td>
                  Realizam operações em arrays, como mesclagem de arrays e verificação da existência de valores em um
                  array.
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Operadores de tipo</a>
                </td>
                <td>
                  instanceof, is_array(), is_bool(), is_callable(), is_float(), is_int(), is_null(), is_numeric(),
                  is_object(), is_resource(), is_scalar(), is_string(), isset(), empty()
                </td>
                <td>
                  Verificam o tipo ou a existência de variáveis ou valores em variáveis.
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section>
        <h3>Tabela de precedência dos operadores</h3>
        <p>
          A tabela seguinte mostra a precedência dos operadores,
          com a maior precedência no começo. Operadores com a mesma
          precedência estão na mesma linha, nesses casos a associatividade
          deles decidirá qual ordem eles serão avaliados.
        </p>

        <div class="overflow-scroll">
          <table>
            <thead>
              <tr>
                <th>Associação</th>
                <th>Operadores</th>
                <th>Informação Adicional</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>não associativo</td>
                <td>clone new</td>
                <td>clone e new</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>[</td>
                <td>array()</td>
              </tr>
              <tr>
                <td>direita</td>
                <td>**</td>
                <td>aritmética</td>
              </tr>
              <tr>
                <td>direita</td>
                <td>++ -- ~ (int) (float) (string) (array) (object) (bool) @</td>
                <td>types e incremento/decremento</td>
              </tr>
              <tr>
                <td>não associativo</td>
                <td>instanceof</td>
                <td>tipos</td>
              </tr>
              <tr>
                <td>direita</td>
                <td>!</td>
                <td>lógicos</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>*</td>
                <td>aritmética</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>/ %</td>
                <td>aritmética</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>+ - .</td>
                <td>aritmética e string</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>&lt;&lt; &gt;&gt;</td>
                <td>bits</td>
              </tr>
              <tr>
                <td>não associativo</td>
                <td>&lt; &lt;= &gt; &gt;=</td>
                <td>comparação</td>
              </tr>
              <tr>
                <td>não associativo</td>
                <td>== != === !== &lt;&gt; &lt;=&gt;</td>
                <td>comparação</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>&amp;</td>
                <td>bits e referências</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>^</td>
                <td>bits</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>|</td>
                <td>bits</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>&amp;&amp;</td>
                <td>lógicos</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>||</td>
                <td>lógicos</td>
              </tr>
              <tr>
                <td>direita</td>
                <td>??</td>
                <td>comparação</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>? :</td>
                <td>ternário</td>
              </tr>
              <tr>
                <td>direita</td>
                <td>= += -= *= **= /= .= %= &= |= ^= <<=>>=</td>
                <td>atribuição</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>and</td>
                <td>lógicos</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>xor</td>
                <td>lógicos</td>
              </tr>
              <tr>
                <td>esquerda</td>
                <td>or</td>
                <td>lógicos</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section>
        <h3>Conversão de valores</h3>
        <pre>
          <code class="language-php">
            $valor = 4 * "2.6";
            $valor_convertido = (int) $valor;
            echo "Valor: ";
            var_dump($valor);
            echo "&lt;br&gt;Convertido: ";
            var_dump($valor_convertido);
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
          $valor = 4 * "2.6";
          $valor_convertido = (int) $valor;
          echo "Valor: ";
          var_dump($valor);
          echo "<br>Convertido: ";
          var_dump($valor_convertido);
        ?>
        </p>
      </section>

      <section>
        <h3>Funções de tipagem</h3>
        <pre>
          <code class="language-php">
            $a = 10;
            $b = "100";
            $c = "100a";
            $d = 2.5;

            var_dump(is_int($a));
            var_dump(is_int($b));
            var_dump(is_string($b));
            var_dump(is_numeric($b));
            var_dump(is_numeric($c));
            var_dump(is_string($c));
            var_dump(is_float($d));
            var_dump(is_float($b));
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $a = 10;
            $b = "100";
            $c = "100a";
            $d = 2.5;

            var_dump(is_int($a));
            var_dump(is_int($b));
            var_dump(is_string($b));
            var_dump(is_numeric($b));
            var_dump(is_numeric($c));
            var_dump(is_string($c));
            var_dump(is_float($d));
            var_dump(is_float($b));
          ?>
        </p>
      </section>

      <section>
        <h3>Funções matemáticas</h3>
      </section>
      <pre>
        <code class="language-php">
          $numeros = [1, 10, 40, 5000, -20, 15];
          $num1 = -4;
          $num2 = 4;
          
          echo pi() . "&lt;br&gt;";
          echo min($numeros) . "&lt;br&gt;";
          echo max($numeros) . "&lt;br&gt;";
          echo abs($num1) . "&lt;br&gt;";
          echo sqrt($num2) . "&lt;br&gt;";
          echo round(10.51) . "&lt;br&gt;";
          echo round(10.49) . "&lt;br&gt;";
          echo round(10.50) . "&lt;br&gt;";
          echo rand(1, 10) . "&lt;br&gt;";
          echo min($numeros) . "&lt;br&gt;";
        </code>
      </pre>
      <p>Resultado:</p>
      <p>
        <?php
          $numeros = [1, 10, 40, 5000, -20, 15];
          $num1 = -4;
          $num2 = 4;
          
          echo pi() . "<br>";
          echo min($numeros) . "<br>";
          echo max($numeros) . "<br>";
          echo abs($num1) . "<br>";
          echo sqrt($num2) . "<br>";
          echo round(10.51) . "<br>";
          echo round(10.49) . "<br>";
          echo round(10.50) . "<br>";
          echo rand(1, 10) . "<br>";
          echo min($numeros) . "<br>";
        ?>
      </p>
    </article>

    <article>
      <h2>Estruturas de controle</h2>
      <section>
        <h3>Estruturas lógicas</h3>
        <p>
          Existem outras estruturas de controle além das mostradas abaixo, acompanhe
          <a href="https://www.php.net/manual/pt_BR/language.control-structures.php">
            aqui
          </a>
          .
        </p>
        <p>
        <pre>
            <code class="language-php">
              $condicao0 = "a";
              $condicao1 = "b";
              if ($condicao0 == "condição verdadeira") {
                echo $condicao0;
              } else if ($condicao1 = "condição 2 verdadeira") {
                echo $condicao1;
              } else {
                echo "Nenhuma das duas é verdadeira&lt;br&gt;";
              }
              switch ($condicao1) {
                case 'a':
                  echo $condicao0;
                  break;
                default:
                  echo "condicao1 não é &lt;br&gt;";
                  break;
              }
            </code>
          </pre>
        </p>
        <p>
          <?php
          $condicao0 = "a";
          $condicao1 = "b";
          if ($condicao0 == "condição verdadeira") {
            echo $condicao0;
          } else if ($condicao1 == "condição 2 verdadeira") {
            echo $condicao1;
          } else {
            echo "Nenhuma das duas é verdadeira<br>";
          }
          switch ($condicao1) {
            case 'a':
              echo $condicao0;
              break;
            default:
              echo "condicao1 não é a<br>";
              break;
          }
          ?>
        </p>
      </section>

      <section>
        <h3>Estruturas de repetição</h3>
        <pre>
          <code class="language-php">
            $x = 0;

            while ($x &lt;= 5) {
              echo "O número é: $x &lt;br&gt;";
              $x++;
            }

            echo "&lt;br&gt;&lt;br&gt;";

            $y = 0;
            do {
              // $y = 0; NÃO FAÇA ISSO, DERRETEU O CÉREBRO?
              echo "O número é: $y &lt;br&gt;";
              $y++;
            } while ($y &lt;= 5);

            echo "&lt;br&gt;&lt;br&gt;";

            for ($count = 0; $count &lt;= 10; $count++){
              echo "O número é: $count&lt;br&gt;";
            }

            echo "&lt;br&gt;&lt;br&gt;";

            foreach([1,2,3,4,10,20,30] as $valor) {
              echo "Número é: $valor &lt;br&gt;";
            }
          </code>
        </pre>
        <p>Resultado: </p>
        <p class="code-result">
          <?php
            $x = 0;

            while ($x <= 5) {
              echo "O número é: $x <br>";
              $x++;
            }

            echo "<br><br>";

            $y = 0;
            do {
              // $y = 0; NÃO FAÇA ISSO, DERRETEU O CÉREBRO?
              echo "O número é: $y <br>";
              $y++;
            } while ($y <= 5);

            echo "<br><br>";

            for ($count = 0; $count <= 10; $count++){
              echo "O número é: $count<br>";
            }

            echo "<br><br>";

            foreach([1,2,3,4,10,20,30] as $valor) {
              echo "Número é: $valor <br>";
            }
          ?>
        </p>
      </section>
    </article>

    <article>
      <h2>Funções</h2>
      <pre>
        <code class="language-php">
          function escreverMensagem(string $param1 = "Mundo") { 
            return "Olá $param1 <br>";
          }

          echo escreverMensagem("Dimitri"); // Não case sensitive
          echo escreverMensagem(); // Parametro Default
        </code>
      </pre>
      <p>Resultado: </p>
      <p class="code-result">
        <?php
          function escreverMensagem(string $param1 = "Mundo") { 
            return "Olá $param1 <br>";
          }

          echo escreverMensagem("Dimitri"); // Não case sensitive
          echo escreverMensagem(); // Parametro Default
        ?>
      </p>
    </article>
    <article>
      <h2>Arrays e matrizes</h2>
      <section>
        <h3>Declarando e manipulando</h3>
        <pre>
          <code class="language-php">
            $carros = array("Lamborghini", "BMW", "Ferrari");
            $carros = ["Fusca", "Uno", "Ferrari"];
            $carros[2] = "Gol";
  
            echo count($carros);
            echo "&lt;br&gt;";
            echo $carros[2];
  
            foreach($carros as $carro) {
              echo $carro."&lt;br&gt;";
            }
  
            echo "Agora matrizes &lt;br&gt;";
  
            $idades = array("Dimitri" =&gt; 30, "Maria" =&gt; 15);
            echo $idades["Dimitri"]."&lt;br&gt;";
            $idades["Dimitri"] = 20;
            foreach($idades as $nome =&gt; $idade) {
              echo "O nome é: $nome e a idade é $idade &lt;br&gt;";
            }
          </code>
        </pre>
        <p class="code-result">
          <?php
            $carros = array("Lamborghini", "BMW", "Ferrari");
            $carros = ["Fusca", "Uno", "Ferrari"];
            $carros[2] = "Gol";
  
            echo count($carros);
            echo "<br>";
            echo $carros[2];
  
            foreach($carros as $carro) {
              echo $carro."<br>";
            }
  
            echo "Agora matrizes <br><br>";
  
            $idades = array("Dimitri" => 30, "Maria" => 15);
            echo $idades["Dimitri"]."<br>";
            $idades["Dimitri"] = 20;
            foreach($idades as $nome => $idade) {
              echo "O nome é: $nome e a idade é $idade <br>";
            }
          ?>
        </p>
      </section>
      <section>
        <h3>Funções de arrays</h3>
        <pre>
          <code class="language-php">
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "&lt;br&gt;";
            }
            sort($carros);
            echo "&lt;br&gt;&lt;br&gt;";
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "&lt;br&gt;";
            }
            rsort($carros);
            echo "&lt;br&gt;&lt;br&gt;";
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "&lt;br&gt;";
            }
            echo "&lt;br&gt;&lt;br&gt;";
            echo "&lt;br&gt;&lt;br&gt;";

            $idades = array("Dimitri" =&gt; 30, "Maria" =&gt; 15);
            asort($idades); // Valor crescente, arsort para decrescente
            foreach ($idades as $nome =&gt; $idade) {
              echo "$nome tem $idade" . "&lt;br&gt;";
            }

            echo "&lt;br&gt;&lt;br&gt;";

            ksort($idades); // Chave crescente, krsort para decrescente
            foreach ($idades as $nome =&gt; $idade) {
              echo "$nome tem $idade" . "&lt;br&gt;";
            }
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "<br>";
            }
            sort($carros);
            echo "<br><br>";
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "<br>";
            }
            rsort($carros);
            echo "<br><br>";
            $carros = array("Lamborghini", "BMW", "Ferrari");
            foreach ($carros as $carro) {
              echo $carro . "<br>";
            }
            echo "<br><br>";
            echo "<br><br>";

            $idades = array("Dimitri" => 30, "Maria" => 15);
            asort($idades); // Valor crescente, arsort para decrescente
            foreach ($idades as $nome => $idade) {
              echo "$nome tem $idade" . "<br>";
            }

            echo "<br><br>";

            ksort($idades); // Chave crescente, krsort para decrescente
            foreach ($idades as $nome => $idade) {
              echo "$nome tem $idade" . "<br>";
            }
          ?>
        </p>
      </section>
    </article>

    <article>
      <h2>Superglobais</h2>
      <p>Não vou especificar muitas delas, apenas $_SERVER por enquanto, segue abaixo:</p>
      <div class="overflow-scroll">
        <table>
          <thead>
            <tr>
              <th>Chave</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($_SERVER as $key => $val) {
                echo "<tr><td>$key</td><td>$val</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </article>
    <article>
      <h2>$_GET e $_POST</h2>
      <section>
        <h3>$_GET</h3>
        <p>
          PELO AMOR DE DEUS é errado falar que POST é "seguro", a única diferença
          é que ele vai pelo BODY da requisição, quem sabe procurar ACHA.
        </p>
        <p>Atenção a dica de segurança, sobre filtrar caracteres pra evitar xsitescript</p>
        <pre>
          <code class="language-php">
            // url/index.php?nome="Dimitri"
            // Se fizer:
            echo $_GET['nome'];
            // O resultado será Dimitri
            // Dá pra passar isso usando links, ex:
            // href="index.php?nome=Dimitri&idade=32
            // href="?nome=Dimitri,idade=32
            // Use isset para checar se existe a chave no GET e atribuir a uma variável:
            if (isset($_GET['nome'])) {
              $nome = htmlspecialchars($_GET['nome']); // Tem que fazer mais coisas. Isso não basta.
            } else {
              $nome = "Mundo";
            }
            // Formulários usam vários methods. get post, put, delete, entre outros.
            // action é para enviar para outra página php carregando ela
            // e atualizando a variável $_GET.
          </code>
        </pre>
      </section>
      <section>
        <h3>$_POST</h3>
        <p>
          De novo, o POST NÃO é mais "SEGURO" do que GET.
          <br><br>
          Quanto à segurança, eles são inerentemente iguais. Embora seja verdade
          que o POST não expõe informações via URL, ele expõe tantas informações
          quanto um GET na comunicação de rede real entre o cliente e o servidor.
          Se você precisar passar informações confidenciais, sua primeira linha de
          defesa seria passá-las usando HTTP Seguro.
          <br><br>
          As postagens GET ou string de consulta são realmente boas para as
          informações necessárias para marcar um item em particular ou para
          ajudar na otimização do mecanismo de pesquisa e na indexação de itens.
          <br><br>
          O POST é adequado para formulários padrão usados ​​para enviar dados únicos.
          Eu não usaria GET para postar formulários reais, a menos que talvez
          em um formulário de pesquisa em que você queira permitir que o usuário
          salve a consulta em um marcador ou algo nesse sentido.
        </p>
        <a href="https://www.alura.com.br/artigos/diferencas-entre-get-e-post">
          Básico sobre GET E POST
        </a>
        <pre>
          <code class="language-php">
            // Post dá pra passar por formulário
            $valor = $_POST['nome'];
            function limpaPost($valor) { // Limpa entrada mas será suficiente?
              $valor = trim($valor);
              $valor = stripslashes($valor);
              $valor = htmlspecialchars($valor);
              return $valor;
            }
          </code>
        </pre>
      </section>
    </article>
    <article>
      <h1>Atividade 000</h1>
      <a href="ativ-000/form.php">Formulário</a>
    </article>

    <article>
      <h2>Manipulação de data</h2>
      <section>
        <h3>Função date()</h3>
        <p>
          A função date() é função para data e hora. <br>
          Acesse a <a target="_blank" href="https://www.php.net/manual/en/function.date.php">documentação</a> do date();
          Atenção: O date mostra a hora do servidor e não do computador.<br>
          O formato padrão do servidor de timezone é CET, observe o comando que muda a timezone.<br>
        </p>
        <p>Além disso qualquer valor pode ser passado para formatar a data ("d/M/Y", "d-M-Y" etc). Exemplo:</p>
        <pre>
          <code class="language-php">
            echo "A data de hoje é " . date("d/M/Y") . "&lt;br&gt;";
            echo "Dia: " . date("d") . "&lt;br&gt;";
            echo "Mês: " . date("M") . "&lt;br&gt;";
            echo "Ano: " . date("Y") . "&lt;br&gt;";
            echo "Hora: " . date("G") . "&lt;br&gt;";
            echo "Minuto: " . date("i") . "&lt;br&gt;";
            echo "Segundo: " . date("s") . "&lt;br&gt;";
            echo "Timezone: " . date("T") . "&lt;br&gt;";
            echo "Configurando zona para utc: &lt;br&gt;&lt;br&gt;";
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hora: " . date("G") . "&lt;br&gt;";
            echo "Minuto: " . date("i") . "&lt;br&gt;";
            echo "Segundo: " . date("s") . "&lt;br&gt;";
            echo "Timezone: " . date("T") . "&lt;br&gt;";
          </code>
        </pre>
        <p>Resultado:
        <p>
        <p class="code-result">
          <?php
            echo "A data de hoje é " . date("d/M/Y") . "<br>";
            echo "Dia: " . date("d") . "<br>";
            echo "Mês: " . date("M") . "<br>";
            echo "Ano: " . date("Y") . "<br>";
            echo "Hora: " . date("G") . "<br>";
            echo "Minuto: " . date("i") . "<br>";
            echo "Segundo: " . date("s") . "<br>";
            echo "Timezone: " . date("T") . "<br><br>";
            echo "Configurando zona para utc: <br>";
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hora: " . date("G") . "<br>";
            echo "Minuto: " . date("i") . "<br>";
            echo "Segundo: " . date("s") . "<br>";
            echo "Timezone: " . date("T") . "<br>";
          ?>
        </p>
      </section>
      <section>
        <h3>Cálculos com data</h3>
        <pre>
          <code class="language-php">
            $hoje = date('Y-m-d');
            $vencimento = (date("Y") + 1)."-".date("m")."-".date("d");
            $diferença = strtotime($vencimento) - strtotime($hoje);
            $dias = floor($diferença / (60*60*24));

            echo "Hoje: $hoje&lt;br&gt;";
            echo "Vencimento: $vencimento&lt;br&gt;";
            echo "A difença é de $dias dias entre as datas.&lt;br&gt;";

            $dataHojeExplodida = explode('-', $hoje);
            echo "Apenas dia da data explodida: $dataHojeExplodida[2]&lt;br&gt;";
          </code>
        </pre>
        <p>Resultado:</p>
        <p class="code-result">
          <?php
            $hoje = date('Y-m-d');
            $vencimento = (date("Y") + 1)."-".date("m")."-".date("d");
            $diferença = strtotime($vencimento) - strtotime($hoje);
            $dias = floor($diferença / (60*60*24));

            echo "Hoje: $hoje<br>";
            echo "Vencimento: $vencimento<br>";
            echo "A difença é de $dias dias entre as datas.<br>";

            $dataHojeExplodida = explode('-', $hoje);
            echo "Apenas dia da data explodida: $dataHojeExplodida[2]<br>";
          ?>
        </p>
      </section>
    </article>

    <article>
      <h2>Include & Require</h2>
      <pre>
        <code class="language-php">
          include('teste.php');
          require('teste.php');
        </code>
      </pre>
      <p>
        Include e require é apenas uma forma de importar um arquivo php dentro
        da nossa aplicação.
        <br><br>
        include não gera erros e deve ser usado para importar código não
        sensível ao correto funcionamento da página.
        <br><br>
        O require é "requerido", ou seja obrigatório e deve ser usado para garantir
        o carregamento de código dentro da página.
        <br><br>
        Existe também as versões include_once e require_once que garantem o carregamento
        de apenas uma versão do código a ser importado. Porém essas impactam
        na performance da aplicação e devem ser utilizadas com sabedoria.
      </p>
    </article>

    <article>
      <h2>Permissão de usuários (chmod)</h2>
      <p>O comando chmod para manipular permissões no php é similar ao do Unix</p>
      <pre>
        <code class="language-php">
          chmod ("/arquivo/diretorio", 755);   // decimal; provavelmente incorreto
          chmod ("/arquivo/diretorio", "u+rwx,go+rx"); // string; incorreto
          chmod ("/arquivo/diretorio", 0755);  // octal; representação correta do modo
        </code>
      </pre>
      <h3>Tabela de referência</h3>
      <div class="overflow-scroll">
        <table>
          <thead>
            <tr>
              <th>Value</th>
              <th>Permission Level</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>400</td>
              <td>Owner Read</td>
            </tr>
            <tr>
              <td>200</td>
              <td>Owner Write</td>
            </tr>
            <tr>
              <td>100</td>
              <td>Owner Execute</td>
            </tr>
            <tr>
              <td>40</td>
              <td>Group Read</td>
            </tr>
            <tr>
              <td>20</td>
              <td>Group Write</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Group Execute</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Global Read</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Global Write</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Global Execute</td>
            </tr>
            <tr>
              <td>600</td>
              <td>Escrita e leitura para o proprietario, nada ninguem mais</td>
            </tr>
            <tr>
              <td>644</td>
              <td>Escrita e leitura para o proprietario, leitura para todos os outros</td>
            </tr>
            <tr>
              <td>755</td>
              <td>Tudo para o proprietario, leitura e execucao para os outros</td>
            </tr>
            <tr>
              <td>750</td>
              <td>Tudo para o proprietario, leitura e execucao para o grupo do prop</td>
            </tr>
          </tbody>
        </table>
      </div>
    </article>

    <article>
      <h2>Manipulação de diretórios</h2>
      <pre>
        <code class="language-php">
          $pasta = "nova-pasta";
          
          if (!is_dir($pasta)) {
            mkdir($pasta, 0755, true); // RXW proprietário e RX para outros.
            // true para modo recursivo de criação de pasta
            echo "Pasta de nome $pasta criada";
          } else {
            rename($pasta, 'teste'); // Renomeia e move a pasta
            echo "Pasta de nome $pasta renomeada";
            //afinal usa o método mv (move)
            rmdir($pasta);
            echo "Pasta de nome $pasta excluída";
          }
        </code>
      </pre>
    </article>

    <article>
      <h2>Manipulação de arquivos</h2>
      <a href="https://www.php.net/manual/pt_BR/ref.filesystem.php">Manual sistema de arquivos</a>
      <pre>
        <code class="language-php">
          // fopen(); fwrite(); fclose(); feof(); fgets();
          // file_put_contents(); file_get_contents();
          // unlink(); copy();
          $pasta = "arquivos/";
          if (!is_dir($pasta)) {
            mkdir(($pasta), 0755);
          }
          $nome_arquivo = date('y-m-d-H-i-s').".txt";
          $caminho_arquivo = $pasta.$nome_arquivo;
          $arquivo = fopen($caminho_arquivo, "a+");
          fwrite($arquivo, 'Uma linha injetada pelo PHP 0' .PHP_EOL);
          // PHP_EOL é o caractere final para pular linha.
          fwrite($arquivo, 'Uma linha injetada pelo PHP 1' .PHP_EOL);
          fwrite($arquivo, 'Uma linha injetada pelo PHP 2' .PHP_EOL);
          fclose($arquivo);
          if (file_exists($caminho_arquivo) && is_file($caminho_arquivo)) {
            echo file_get_contents($caminho_arquivo); // Pega todo conteúdo direto
            $abrirArquivo = fopen($caminho_arquivo, 'r');
            while(!feof($abrirArquivo)) {
              echo fgets($abrirArquivo) . "<br>";
            }
            fclose($abrirArquivo);
          }

          copy($caminho_arquivo, 'teste.txt');

          if (is_dir($pasta)) {
            $dirArrayInfo = scandir($pasta);
            print_r($dirArrayInfo); // Printando array. escaneando conteúdo diretório
            foreach($dirArrayInfo as $arquivo) {
              $caminhocompleto = $pasta.$arquivo;
              if (is_file($caminhocompleto)) {
                unlink($caminhocompleto);
              }
            }
            rmdir($pasta);
            $arquivo = "teste.html";
            file_put_contents($arquivo, '&lt;h1&gt;OLA&lt;/h1&gt;');
          }
        </code>
      </pre>
      <p>Resultado:</p>
      <p class="code-result">
        <?php
          // fopen(); fwrite(); fclose(); feof(); fgets();
          // file_put_contents(); file_get_contents();
          // unlink(); copy();
          $pasta = "arquivos/";
          if (!is_dir($pasta)) {
            mkdir(($pasta), 0755);
          }
          $nome_arquivo = date('y-m-d-H-i-s').".txt";
          $caminho_arquivo = $pasta.$nome_arquivo;
          $arquivo = fopen($caminho_arquivo, "a+");
          fwrite($arquivo, 'Uma linha injetada pelo PHP 0' .PHP_EOL);
          // PHP_EOL é o caractere final para pular linha.
          fwrite($arquivo, 'Uma linha injetada pelo PHP 1' .PHP_EOL);
          fwrite($arquivo, 'Uma linha injetada pelo PHP 2' .PHP_EOL);
          fclose($arquivo);
          if (file_exists($caminho_arquivo) && is_file($caminho_arquivo)) {
            echo file_get_contents($caminho_arquivo); // Pega todo conteúdo direto
            $abrirArquivo = fopen($caminho_arquivo, 'r');
            while(!feof($abrirArquivo)) {
              echo fgets($abrirArquivo) . "<br>";
            }
            fclose($abrirArquivo);
          }

          copy($caminho_arquivo, 'teste.txt');

          if (is_dir($pasta)) {
            $dirArrayInfo = scandir($pasta);
            print_r($dirArrayInfo); // Printando array. escaneando conteúdo diretório
            foreach($dirArrayInfo as $arquivo) {
              $caminhocompleto = $pasta.$arquivo;
              if (is_file($caminhocompleto)) {
                unlink($caminhocompleto);
              }
            }
            rmdir($pasta);
            $arquivo = "teste.html";
            file_put_contents($arquivo, '<h1>OLA</h1>');
          }
        ?>
      </p>
    </article>
  </main>
  <script src="../src/util/prism/scriptprism.js"></script>
</body>

</html>