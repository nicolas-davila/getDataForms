<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // Verifica se os parâmetros foram passados com GET
            $nome = $_GET["nome"] ?? "Nome não informado"; // Usa ?? para definir um valor padrão
            $sobren = $_GET["sobrenome"] ?? "Sobrenome não informado"; 
            echo "Seja bem-vindo, $nome $sobren!<br>";

        ?>
        <p><a href="index.html">Voltar a página anterior</a></p>
</main>
</body>
</html>