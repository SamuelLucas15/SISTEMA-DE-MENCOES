<?php
    require_once('../config/dbConnect.php');
    session_start();

    $turma_id = $_GET['id_aluno']; // Pega o id da turma via GET

    // Consulta SQL para pegar os alunos dessa turma
    $query = "
            SELECT a.mat_aluno, u.nome, t.nome_turma 
                            FROM aluno a
                            JOIN usuario u ON a.id_usuario = u.id_usuario
                            JOIN turma t ON a.id_turma = t.id_turma
                            WHERE a.id_turma = :id_turma";
                        
    // Preparar e executar a consulta
    $stmt = $dbh->prepare($query);
    $stmt->bindParam('id_turma', $turma_id); // 'i' indica que é um parâmetro inteiro
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    //exit();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menções - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/mencoes.css">
</head>
<body>
    <div class="turmas-container">
        <div class="div-img">
            <img class="baner" src="../public/imgs/baner.png" alt="Logo do boneco do Senac">
        </div>
        <div class="turmas-box">
            <div class="sem-margin-mencoes">
                <h1>Menções</h1>
            </div>
            <div class="aluno">
                <p class="aluno-0">
                    Aluno (a): <?= $_GET['nome_aluno']?>
                </p>
            </div>
            <form class="formulario-mencao" action="../src/controller/controller_mencao.php">
                <select class="trimestres" name="trimestre" required>
                    <option value="1" selected>1 Trimestre</option>
                    <option value="2">2 Trimestre</option>
                    <option value="3">3 Trimestre</option>
                </select>
                <p> MENÇÃO AV1</p>
                <select id="av1" class="dar-nota" name="av1" required>
                    <option value="0" selected>_</option>
                    <option value="1">A</option>
                    <option value="2">PA</option>
                    <option value="3">NA</option>
                </select>
                <p>MENÇÃO AV2</p>
                <select id="av2" class="dar-nota" name="av2" required>
                    <option value="0" selected>_</option>
                    <option value="1">A</option>
                    <option value="2">PA</option>
                    <option value="3">NA</option>
                </select>
                <p>MENÇÃO DO TRIMESTRE</p>
                        <input id="ResultadoMencao" name="mencao" readonly>
                <div class="mencao-noa">
                    <div class="metade">
                        <p>NOA</p>
                        <select class="dar-nota" id="noa" name="noa" required>
                            <option value="0" selected>_</option>
                            <option value="1">A</option>
                            <option value="2">PA</option>
                            <option value="3">NA</option>
                        </select>
                    </div>
                    <div class="metade">
                        <p>PÓS NOA</p>
                        <input id="ResultadoPosNoa" name="pos_noa" readonly>
                    </div>
                </div>
                        
                <div class="div-enviar-nota">
                    <button type="submit" onclick="calcularMencao(event)" class="enviar-nota">Salvar notas</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>