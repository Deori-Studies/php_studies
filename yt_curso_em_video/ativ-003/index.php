<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/style/reset.css">
  <link rel="stylesheet" href="../../src/util/prism/prism.css">
  <link rel="stylesheet" href="../../src/style/base.css">
  <link rel="stylesheet" href="../../src/style/style.css">
  <link rel="stylesheet" href="../../src/style/responsive.css">
  <title>php.ini</title>
</head>
<body>
  <header>
    <h1>Configuração básica do php no php.ini</h1>
    <nav>
      <a href="../ativ-002/"><button>Anterior</button></a>
      <a href="../ativ-004/"><button>Próxima</button></a>
    </nav>
  </header>
  <article>
    <h2>Básicos:</h2>
    <p>
      O servidor deve ser reiniciado em toda alteração de configurações no servidor.<br>
      Sempre consulte a documentação no próprio php.ini, nem sempre é bom ligar as configurações.<br>
    </p>
    <ul>
      <li>display_startup_errors = On/Off: Exibir erros de interpretação.</li>
        display_startup_errors é recomendado ser desligado quando em produção.<br>
      <li>short_open_tag = On/Off: Processa as short open tags</li>
        No caso das short_open_tags tenha cuidado já que se o servidor não processar essas tags
        ele vai enviar todo o conteúdo não processado para o cliente tornando o código visível.
        Isso pode ser desastroso dependendo do conteúdo e contexto de segurança.<br>
        O problema de ligar é que talvez o servidor para o qual vai enviar ou migrar o código
        pode não permitir alterações no php.ini. Pode gerar dores de cabeças.
    </ul>
  </article>
</body>
</html>
