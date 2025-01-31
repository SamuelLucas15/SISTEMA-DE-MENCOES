<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/layout_cad_log.css">
</head>
<body>
    <div class="conteudo-box">  
        <img class="boneco-medio" src="../public/imgs/bonecomediotec.png" alt="Logo MedioTec">
        <h1>CADASTRO</h1>
        <form action="/cadastro" method="POST">
            <label for="username">Nome</label>
            <input placeholder="Insira seu Nome" type="text" id="username" name="username" required>
           
            <label for="email">E-mail</label>
            <input placeholder="Insira seu E-mail" type="email" id="email" name="email" required>

            <label for="cpf">CPF</label>
            <input placeholder="Insira seu CPF" type="text" id="cpf" name="cpf" required>

            <label for="matricula">Matrícula</label>
            <input placeholder="Insira sua Matricula" type="text" id="matricula" name="matricula" required>

            <label for="tipo_usuario">Tipo do usuário</label>
            <select name="tipo_usuario" id="tipo_usuario">
                <option disabled selected>Escolha o tipo</option>
                <option value="1">Secretário(a)</option>
                <option value="2">Professor(a)</option>
                <option value="3">Aluno(a)</option>
            </select>
            
            <button type="submit">CADASTRAR</button>
        </form>
    </div>
    <!-- <div class="conteudo-box">  
        <img class="boneco-medio" src="../public/imgs/bonecomediotec.png" alt="Logo MedioTec">
        <h1>CADASTRO</h1>
        <form action="/cadastro" method="POST">
            <label for="username">Nome</label>
            <input placeholder="Insira seu Nome" type="text" id="username" name="username" required>
           
            <label for="email">E-mail</label>
            <input placeholder="Insira seu E-mail" type="email" id="email" name="email" required>

            <label for="cpf">CPF</label>
            <input placeholder="Insira seu CPF" type="text" id="cpf" name="cpf" required>

            <label for="matricula">Matrícula</label>
            <input placeholder="Insira sua Matricula" type="text" id="matricula" name="matricula" required>

            <label for="tipo_usuario">Tipo do usuário</label>
            <select name="tipo_usuario" id="tipo_usuario">
                <option disabled selected>Escolha o tipo</option>
                <option value="1">Secretário(a)</option>
                <option value="2">Professor(a)</option>
                <option value="3">Aluno(a)</option>
            </select>
            
            <button type="submit">CADASTRAR</button>
        </form>
    </div> -->
</body>

<!-- fazer um select para escolher o tipo de usuario (CAPTURAR NA NEW USER CONTROLLER)-->