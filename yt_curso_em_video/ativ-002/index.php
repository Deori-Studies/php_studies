<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/dark_theme/prism.css">
  <link rel="stylesheet" href="../../src/dark_theme/style.css">
  <title>Document</title>
</head>
<body>
  <h1>Exemplo PHP</h1>
  <h2>Concatenação de string e data</h2>
  <p>
    Em PHP "." é operador de concatenação em js seria o "+"<br>
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
  <p>
    Resultado: <br>
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
  <script src="../../src/dark_theme/prism.js"></script>
</body>
</html>