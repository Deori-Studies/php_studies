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
  <title>Formulários com PHP - 1</title>
</head>
  <body>
    <header>
      <h1>Operadores Aritméticos</h1>
      <nav>
      <a href="../ativ-007/"><button>Anterior</button></a>
      <a href="../../index.php"><button>Página Inicial</button></a>
    </nav>
    </header>
    <main>
      <article>
        <h2>Operadores aritméticos</h2>
        <ul>
          <li>+$a identidade | Conversão de $a para int ou float conforme apropriado.</li>
          <li>-$a negação | Oposto de $a.</li>
          <li>$a + $b adição | 	Soma de $a e $b.</li>
          <li>$a - $b subtração | 	Diferença entre $a e $b.</li>
          <li>$a * $b multiplicação | Produto de $a e $b.</li>
          <li>$a ** $b exponenciação | Resultado de $a elevado a $b. APENAS PHP 5.6.</li>
          <li>$a / $b divisão | 	Quociente de $a e $b.</li>
          <li>$a % $b módulo | 	Resto de $a dividido por $b | Mesmo sinal de $a</li>
        </ul>
      </article>
      <article>
        <h2>Curiosidade sobre concatenação e operadores aritméticos</h2>
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
      </article>
    </main>
    <script src="../../src/util/prism/scriptprism.js"></script>
  </body>
</html>
