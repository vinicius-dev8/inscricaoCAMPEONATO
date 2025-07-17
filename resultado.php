<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Inscrição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Inscrição Recebida</h3>
    </header>
    <section>
        <h2>Dados do Time</h2>
        <p><strong>Nome do Time:</strong> <?php echo $_POST["nome_do_time"]; ?></p>
        <p><strong>Responsável:</strong> <?php echo $_POST["responsavel"]; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
        <p><strong>Cidade:</strong> <?php echo $_POST["cidade"]; ?></p>
        <p><strong>Número de Jogadores:</strong> <?php echo $_POST["jogadores"]; ?></p>
    </section>
</body>
</html>