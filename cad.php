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
        
            $nome = $_GET["nome"];
            $sobren = $_GET["sobrenome"];
            echo "Seja bem-vindo, $nome $sobren!<br>";

        ?>
    </main>
</body>
</html>