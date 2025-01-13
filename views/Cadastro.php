<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/layout_cad_log.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">  
            <img class="boneco-medio" src="../public/imgs/bonecomediotec.png" alt="Logo MedioTec">
            <h1>CADASTRO</h1>
            <form action="../src/controller/controller_cadastro.php" method="POST">
                <label for="username">Nome</label>
                <input placeholder="Insira seu Nome" type="text" id="username" name="username" required>
           
                <label for="email">E-mail</label>
                <input placeholder="Insira seu E-mail" type="email" id="email" name="email" required>

                <label for="cpf">CPF</label>
                <input placeholder="Insira seu CPF" type="text" id="cpf" name="cpf" required>

                <label for="matricula">Matrícula</label>
                <input placeholder="Insira sua Matricula" type="text" id="matricula" name="matricula" required>

                <button type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>