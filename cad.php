<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    
    <main>
        <?php 
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "desconhecido";

        echo "Muito prazer, <strong>$n $s</strong>, estou iniciando nesse mundo de desenvolvedores e fazendo meus primeiros códigos."
        ?><br>

        <h4>Meu nome é <strong>Michael Neto</strong> atualmente concluindo minha graduação e logo iniciando uma PÓS <address>engenheiro de software</address>tenho um filhos de 10 anos <strong>Caio Neto</strong> e sou casado com a <strong>Evelyn Mendes</strong>, trabalho como garçom a mais de 10 anos e estou tentando uma oportunidade na área da tecnologia e conhecer o mundo a fora programando.</h4>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    <h2><strong>Seja Muito bem vindo</strong></h2>

    
    
</body>
</html>