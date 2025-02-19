<?php
    require 'conexao.php';

    // Consulta para obter os vídeos
    $sql = "SELECT capa, usuario, foto_usuario, titulo, visualizacoes, data_postagem, duracao, url FROM videos ORDER BY data_postagem DESC";
    $stmt = $conn->query($sql);
    $videos = $stmt->fetch_all(MYSQLI_ASSOC);
?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card de vídeo</title>
</head>

<body>

    <div class="video-container">
        <?php foreach ($videos as $video): ?>
            <div class="video-card">
                <div class="container-absolute">
                    <div class="container-duration">
                        <div class="duration">
                            <span><?php echo htmlspecialchars($video['duracao']) ?></span>
                        </div>
                    </div>
                    <div class="container-foto-usuario">
                        <img src="<?php echo htmlspecialchars($video['foto_usuario']) ?>">
                    </div>
                </div>

                <div class="container-card">
                    <img src="<?php echo htmlspecialchars($video['capa']); ?>" class="video-thumbnail">
                </div>

                <div class="text-info">
                    <p><?php echo htmlspecialchars($video['usuario']) ?? 'Usuário'; ?></p>
                    <h3><?php echo htmlspecialchars($video['titulo']) ?? 'Carregando...'; ?></h3>
                    <p><?php echo number_format($video['visualizacoes']) ?? '0'; ?> K • <?php echo date('d/m/Y', strtotime($video['data_postagem'])); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>

<!-- S T Y L E -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        font-family: "Poppins";
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    body {
        width: 100vw;
        height: 100vh;
        background-color: rgba(12, 1, 24, 1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-duration {
        top: 0;
        background-color: rgba(36, 39, 48, 1, 0.5);
        color: white;
        position: absolute;
    } .duration {
        padding: 5px;
        background-color: rgba(75, 75, 75, 0.5);
        border-radius: 8px;
        margin-top: 10px;
        margin-right: 10px;
    }

    .container-absolute {
        padding: 5px;
        display: flex;
        overflow: hidden;
        display: flex;
        position: absolute;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: flex-end;
    }
    
    .container-foto-usuario {
        border-radius: 100%;
        margin-right: 20px;
        width: 50px;
        height: 50px;
        overflow: hidden;
    }

    .text-info {
        color: white;
        height: 50%;
        width: 100%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    } p {
        opacity: 0.5;
    }

    .container-card {
        width: 100%;
        height: 50%;
        border: none;
    }

    .video-container {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
    }
    .video-card {
        position: relative;
        overflow: hidden;
        max-width: 300px;
        max-height: 350px;
        min-width: 300px;
        min-height: 350px;
        border-radius: 25px;
        background-color: rgba(36, 39, 48, 1);
    }

    .video-info {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        justify-content: space-evenly;
    }

    .video-thumbnail {
        background-color: green;
        width: 100%;
        height: 100%;
        border: none;
    }

    .watch-button {
        display: block;
        text-align: center;
        margin-top: 10px;
        padding: 8px;
        background: #ff0000;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .watch-button:hover {
        background: #cc0000;
    }
</style>