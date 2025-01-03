<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/lista.css">
</head>
<body>
    <div class="menu-container">
        <div class="div-img">
            <img src="../public/imgs/baner.png" alt="logoboneco">
        </div>
        
        <div class="menu-box">  
        <?php
                    require_once('../config/dbConnect.php');
                    session_start();

                    $turma_id = $_GET['id_turma']; // Pega o id da turma via GET

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
            <div class="botoes">
                <button class="titulo-lista" disabled>Alunos da Turma: <?= $result[0]['nome_turma']?></button>
                <ul class="lista-alunos">
                <?php
                    
                    foreach ($result as $row): ?>
                        <li>
                            <a href="mencoes.php?id_aluno=<?= $row['mat_aluno']; ?>&nome_aluno=<?= $row['nome']?>" class="alunos">
                                <?= $row['nome']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="seta-indicadora">▼</div>
            </div> 
               
            </div>       
        </div>
    </div>
</body>
</html>  
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista - Sistema de Menções</title>
    <link rel="stylesheet" href="../public/css/lista.css">
</head>
<body>
    <div class="menu-container">
        <div class="div-img">
            <img src="../public/imgs/baner.png" alt="logoboneco">
        </div>
        
        <div class="menu-box">  
        <?php
                    require_once('../config/dbConnect.php');
                    session_start();

                    $turma_id = $_GET['id_turma']; // Pega o id da turma via GET

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
            <div class="botoes">
                <button class="titulo-lista" disabled>Alunos da Turma: <?= $result[0]['nome_turma']?></button>
                <ul class="lista-alunos">
                <?php
                    
                    foreach ($result as $row): ?>
                        <li>
                            <a href="mencoes.php?id_aluno=<?= $row['mat_aluno']; ?>&nome_aluno=<?= $row['nome']?>" class="alunos">
                                <?= $row['nome']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="seta-indicadora">▼</div>
            </div> 
               
            </div>       
        </div>
    </div>
</body>
</html>  
>>>>>>> fd31364 (em casa)
