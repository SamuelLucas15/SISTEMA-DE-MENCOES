<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>
<body>
    <div class="conteudo-box">
        <img src="../public/imgs/bonecomediotec.png" alt="Logo do MedioTec" class="boneco-medio">
        <h1>LOGIN</h1>
        <?php
            if (isset($_GET["erro"])){
                if ($_GET["erro"] == "NotFound"){
                    echo '<div class="caixa-erro">
                    <span class="error">Matrícula ou senha incorretos</span>
                    </div>';
                }
            }
        ?>
        <form action="../src/controller/controller_login.php" method="POST">
            <label for="matricula">Matrícula</label>
            <input placeholder="Insira sua Matrícula" type="text" id="matricula" name="matricula" required>
                
            <label for="senha">Senha</label>
            <input placeholder="Insira sua senha" type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
            <p><a href="#">Esqueceu a senha?</a></p> 
        </form>  
    </div>
</body>
</html>