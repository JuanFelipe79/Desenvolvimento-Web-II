<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
    $senha_correta = 'senha123';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha_enviada = isset($_POST['senha']) ? trim($_POST['senha']) : '';
    
        if ($senha_enviada == $senha_correta) {
            echo "Parabéns, você sabe a senha";
        } else {
            echo "Você errou";

            $arquivo = 'senhas_enviadas.txt';
            $conteudo = " - Senha enviada: " . $senha_enviada . PHP_EOL;
    
            file_put_contents($arquivo, $conteudo, FILE_APPEND | LOCK_EX);
        }
    } else {
        echo "Método não permitido.";
    }
    ?>
</body>
</html>
