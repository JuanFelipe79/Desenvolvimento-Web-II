<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];

    if (!empty($nome) && !empty($cpf)) {
        $arquivo = 'cadastros.txt';
        $conteudo = "Nome: $nome - CPF: $cpf\n";
        file_put_contents($arquivo, $conteudo, FILE_APPEND);
        $mensagem = "Cadastro realizado";
    } else {
        $mensagem = "Preencha todos os campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    <div style="width: 350px; padding: 20px; margin left: 50px;"class="Cadastro">
        <h2>Cadastro</h2>
        <p>Insira os dados para cadastro</p>
        <?php if (!empty($mensagem)) { echo "<div class='alert alert-info'>$mensagem</div>"; } ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
        <br>
        <a href="welcome.php" class="btn btn-secondary">Voltar</a>
    </div>    
</body>
</html>
