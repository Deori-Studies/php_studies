<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/dark_theme/prism.css">
  <link rel="stylesheet" href="../../src/dark_theme/style.css">
  <title>Tipos primitivos</title>
</head>
<body>
  <h1>Tipos primitidos do PHP</h1>
  <h2>Tipagem</h2>
  <ul>
    <li>Dinamicamente tipada.</li>
    <li>Fracamente tipada.</li>
  </ul>
  <h2>Categorias dos tipos primitivos</h2>
    <h2>Escalares</h2>
    <ul>
      <li>$sobrenome = "Silva" | string</li>
      <li>$idade = 27 | int ou integer</li>
      <li>$peso = 72.2 | float, double - tipo real só até 7.4</li>
      <li>$casado = true | bool ou boolean</li>
    </ul>
    <h3>Observe que:</h3>
    <ul>
      <li>0x1A | Hexadeciaml | INT</li>
      <li>02818 | Octal | INT</li>
      <li>0b1010 | Binário | INT</li>
      <li>3e2 | 3*10^2 | DOUBLE</li>
    </ul>

    <h3>Como declarar: </h3>
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
    <ul>
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
  <h3>Curiosidades</h3>
  <p>
    Em PHP o valor booleano "true = 1" por padrão ou pode ser qualquer valor;<br>
    Já o valor booleano "false = vazio" por padrão ou pode ser 0, null;<br>
  </p>
  <h2>Compostos</h2>
  <ul>
    <li>array</li>
    <li>object</li>
  </ul>
  <pre>
    <code class="language-php">
      $vet = [6, 2, 9, 3, 5];
      # echo "O vetor é $vet" // Array to string conversion não existe
      var_dump($vet);

      class pessoa { // Classe de objeto
        private string $nome;
      }
      $pessoa_1 = new pessoa; // Nova instância
      var_dump($pessoa_1)
    </code>
  </pre>
  <p>
    <?php
      $vet = [6, 2.5, "Maria", 3, false];
      # echo "O vetor é $vet" // Array to string conversion não existe
      var_dump($vet);
      echo "<br><br>";
      class pessoa { // Classe de objeto
        private string $nome;
      }
      $pessoa_1 = new pessoa; // Nova instância
      var_dump($pessoa_1)
    ?>
  </p>
  <h2>Especiais</h2>
  <ul>
    <li>null</li>
    <li>resource</li>
    <li>callable</li>
    <li>mixed</li>
  </ul>
  <script src="../../src/dark_theme/prism.js"></script>
</body>
</html>
