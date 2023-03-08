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
  <title>Variáveis e Constantes</title>
</head>
<body>
  <header>
    <h1>Variávels e Constantes em PHP</h1>
    <nav>
      <a href="/studies/003/"><button>Anterior</button></a>
      <a href="/studies/005/"><button>Próxima</button></a>
    </nav>
  </header>

  <article>
    <h2>Primeiras variáveis</h2>
    <p>
      Tanto variáveis e constantes usam memória do servidor, todo processamento é feito
      serverside e apenas o resultado é enviado ao cliente.
    </p>
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
    <p class="code-result">
      <?php
        $myage = date("Y") - 1995;
        echo "A idade do Deori é $myage.<br>";
        echo `A idade do Deori é ${myage}.<br>`;
        echo 'A idade do Deori é $myage.<br>';
      ?>
    </p>
  </article>

  <article>
    <h2>Reatribuindo valor a variável</h2>
    <p>
      Veja que é possível atribuir um valor a uma variável indefinidas vezes.
      Assim podemos manipular de várias formas uma mesma variável não ficando restrito
      ao seu valor.
    </p>
    <pre>
      <code class="language-php">
        $nomeGabriel = "Giselle";
        $nomeGabriel = "Rodrigo";
        $nomeGabriel = "Gabriel";
        echo "O nome é: $nomeGabriel"
      </code>
    </pre>
    <p>Qual o resultado? Veja abaixo: </p>
    <p class="code-result">
      <?php
        $nomeGabriel = "Giselle";
        $nomeGabriel = "Rodrigo";
        $nomeGabriel = "Gabriel";
        echo "O nome é: $nomeGabriel"
      ?>
    </p>
  </article>

  <article>
    <h2>Constantes</h2>
    <p>Observe o código:</p>
    <pre>
      <code class="language-php">
        const PAÍS = "BRASIL";
        echo "Sou do " . PAÍS;
      </code>
    </pre>
    <p>O código vai rodar? Veja o resultado:</p>
    <p class="code-result">
      <?php
        const PAÍS = "BRASIL";
        echo "Sou do " . PAÍS;
      ?>
    </p>
    
    <p>
      E por incrível que pareça rodou mesmo com acento, apesar de
      eu não recomendar já que não é o padrão.<br>
      <br>
      Outra coisa perceba que não é necessário o $ para definir uma constante.
    </p>
  </article>

  <article>
    <h2>Regras de nomenclatura em PHP</h2>
    <ul>
      <li>Variáveis sempre começam com $</li>
      <li>Segundo char pode ser letra ou _</li>
      <li>Aceita [a-z][A-Z][0-9] e [_]</li>
      <li>Aceita char ASCII a partir de 128</li>
      <li>Aceita caracteres como á, õ, ç</li>
      <li>a linguagem é case-sensitive (Não para comandos)</li>
      <li>Nomes especiais como $this não podem ser usados</li>
    </ul>
  </article>

  <article>
    <h2>Recomendações de nomenclatura em PHP</h2>
    <ul>
      <li>Nomes claros e de fácil identificação</li>
      <li>Evite nomes curtos ou muito longos</li>
      <li>Defina padrão de nomeção e siga em todo projeto</li>
      <li>Pra variáveis preferência minúsculas</li>
      <li>Pra CONSTANTES preferência maiúsculas</li>
      <li>Métodos e atributos use camelCase</li>
      <li>SNAKE_CASE em constantes</li>
    </ul>
  </article>

  <article>
    <h2>Curiosidades sobre o PHP</h2>
    <p>Observe o código abaixo:</p>
    <pre>
      <code class="language-php">
        $xablau = "xablauzin";
        $$xablau = "Opa beleza?";
        echo "$xablauzin";
      </code>
    </pre>
    <p>Veja o resultado:</p>
    <p class="code-result">
      <?php
        $xablau = "xablauzin";
        $$xablau = "Opa beleza?";
        echo "$xablauzin";
      ?>
    </p>
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
      $ (Vou ler ou criar uma variável?)(Vou ler ou criar uma variável com esse nome?)<br>
      $ = (VOU CRIAR uma variável com o nome da variável a frente)(VOU LER uma variável com esse nome!!);<br>
      $ = "Olá mundo";(Criar uma variável com valor de "Olá mundo" com o nome lido na posição $nome)<br>
      <br>
      variável $xablau criada com valor de "Olá mundo"; <br>
      <br>
      Não foi a melhor explicação mas também não foi a pior, ou foi?
    </p>
  </article>

  <article>
    <h2>Outra coisa</h2>
    <p>
      Olha nas devtools do navegador como o PHP envia apenas html para o cliente não expondo o código da sua aplicação.
    </p>
  </article>
  <script src="../../src/util/prism/scriptprism.js"></script>
</body>
</html>
