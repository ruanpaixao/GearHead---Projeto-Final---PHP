
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html/css/cadastrotemplete.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="img/WhatsApp_Image_2024-02-17_at_13.46.30-removebg-preview (2).png">
    <link rel="stylesheet" href="html/css/formulario.css">
    <title>Sign Up GearHead</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/WhatsApp_Image_2024-02-17_at_13.46.30-removebg-preview (2).png" alt="">
        </div>
        <h1>GEARHEAD</h1>
        <div>
            <button class="botao"><a href="cad.php">Limpar Cadastro</a></button>
            <button class="botao"><a href="index.html">Página Inicial</a></button>
            </script>
        </div>
    </header>
    <section class="formulario">
        <h2>Cadastro de Pessoa</h2>
        <form action="ligacaobd.php" method="post">
            <label for="nome">Nome:</label >
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">Cpf:</label>
            <input type="number" id="cpf" name="cpf" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button class="botao" type="submit"><a href="index.html">Cadastrar</a></button>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
