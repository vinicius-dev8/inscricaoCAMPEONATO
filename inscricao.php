<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <header>
        <h3>CAMPEONATO ESTRELA DA VILA</h3>
        <br>
        <h4>INSCRIÇÃO PARA O CAMPEONATO</h4>
    </header>
    <br>
    <section>
        <h1>Formulário</h1>
        <h2>Preencher:</h2>
        <br>

        <div class="formulario">

            <form action="resultado.php" method="post" target="">
                <label for="nome">Nome do Time</label><br>
                <input type="text" id="nome" name="nome do time" placeholder="nome_do_time">
                <br><br>

                <label for="nome"> Nome do Responsável</label><br>
                <input type="text" id="responsavel" name="responsavel" placeholder="Responsável">
                <br><br>

                <label for="nome"> E-mail</label><br>
                <input type="text" id="email" name="email" placeholder="Email">
                <br><br>

                <label for="nome"> Cidade</label><br>
                <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                <br><br>

                <label for="nome"> Número de Jogadores</label><br>
                <input type="number" id="jogadores" name="jogadores" placeholder="Jogadores">
                <br><br>


                <input type="submit" name="ENVIAR"> <br>


            </form>

        </div>


    </section>


    <br>

    <footer></footer>
</body>
</html>