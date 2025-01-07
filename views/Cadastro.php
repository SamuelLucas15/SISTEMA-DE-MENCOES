<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/cadastro.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">  
            <img class="boneco-medio" src="../public/imgs/bonecomediotec.png" alt="Logo MedioTec">
               <h1>CADASTRO</h1>
            <form action="../src/controller/controller_cadastro.php" method="POST">
                <label for="username">NOME</label>
                <input placeholder="Inserir Nome" type="text" id="username" name="username" required>
           
                <label for="email">E-MAIL</label>
                <input placeholder="Inserir E-mail" type="email" id="email" name="email" required>

                <label for="cpf">CPF</label>
                <input placeholder="Digite seu CPF" type="text" id="cpf" name="cpf" required>

                <label for="matricula">MATRICULA</label>
                <input placeholder="Inserir Matricula" type="text" id="matricula" name="matricula" required>

                <button type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>
