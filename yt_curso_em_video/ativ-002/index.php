<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/dark_theme/prism.css">
  <link rel="stylesheet" href="../../src/dark_theme/style.css">
  <title>Variáveis, date e concatenação</title>
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
  <h2>Interpolação e primeiras variáveis</h2>
  <p>
    Primeiramente, assim se inicia uma variável:<br>
    <code class="language-php">$name = algo;</code><br>
    PHP assim como js aceita interpolar variáveis, no js seria usando `${variável}`. <br>
    Em nosso querido PHP não é muito diferente.<br>
    Atenção: Lembre-se que é necessário usar "aspas duplas", `graves` está deprecated com variáveis e 'aspas simples' é interpretado apenas como string<br>
    Observe: <br>
  </p>
  <pre>
    <code class="language-php">
    $myage = date("Y") - 1995;

    echo "A idade do Deori é $myage.&lt;br&gt;";
    echo `A idade do Deori é ${myage}.&lt;br&gt;`;
    echo 'A idade do Deori é $myage.&lt;br&gt;';
    </code>
  </pre>
  <p>Resultado: </p>
  <?php
    $myage = date("Y") - 1995;

    echo "A idade do Deori é $myage.<br>";
    echo `A idade do Deori é ${myage}.<br>`;
    echo 'A idade do Deori é $myage.<br>';
  ?>
  <h2>Curiosidades sobre o PHP</h2>
  <p>Observe o código abaixo:</p>
  <pre>
    <code class="language-php">
      $xablau = "xablauzin";
      $$xablau = "Opa beleza?";

      echo "$xablauzin";
    </code>
  </pre>
  <p>Veja o resultado:<br></p>
  <?php
    $xablau = "xablauzin";
    $$xablau = "Opa beleza?";

    echo "$xablauzin";
  ?>
  <p>
    Parte 1:
    <br>
    ?????O que aconteceu???????????<br>
    Pois bem, é possível dar o nome de uma variável utilizando o valor de outra variável.<br>
    Vou explicar como se eu fosse o interpretador pensando<br>
    de forma simplificada, claro, pra saber como ele funciona consulte a documentação do interpretador<br>
    <br>
    $ (Vou ler ou criar uma variável??)<br>
    $variavel1 (Vou ler ou criar uma variável com esse nome??)<br>
    $variavel1 = (Vou criar uma variável com esse nome!!)(Mas com que valor?)<br>
    $variavel1 = "xablau"; (Criar uma variável "nome" com valor tipo string "xablau")<br>
    <br>
      Parte 2:
    <br>
    $ (Vou ler ou criar uma variável?)<br>
    $$ (Vou ler ou criar uma variável?)(Vou ler ou criar uma variável?)<br>
    $$variavel1 (Vou ler ou criar uma variável?)(Vou ler ou criar uma variável com esse nome?)<br>
    $$variavel1 = (VOU CRIAR uma variável com o nome da variável a frente)(VOU LER uma variável com esse nome!!);<br>
    $$variavel1 = "Olá mundo";(Criar uma variável com valor de "Olá mundo" com o nome lido na posição $nome)<br>
    <br>
    variável $xablau criada com valor de "Olá mundo"; <br>
    <br>
    Não foi a melhor explicação mas também não foi a pior, ou foi?
  </p>
  <h2>Outra coisa</h2>
  <p>
    Olha nas devtools do navegador como o PHP envia apenas html para o cliente não expondo o código da sua aplicação.
  </p>
  <script src="../../src/dark_theme/prism.js"></script>
</body>
</html>
