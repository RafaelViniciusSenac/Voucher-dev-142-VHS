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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0c0118] flex items-center justify-center h-screen w-screen">

    <div class="flex flex-wrap gap-6">
        <?php foreach ($videos as $video): ?>
            <div class="relative max-w-[300px] max-h-[350px] min-w-[300px] min-h-[350px] bg-[#242730] rounded-3xl overflow-hidden">
                <!-- Capa do Vídeo -->
                <div class="absolute w-full h-full flex items-center justify-end p-4">
                    <!-- Duração -->
                    <div class="bg-[#4b4b4b80] text-white p-2 rounded-xl mt-2 mr-2">
                        <span><?php echo htmlspecialchars($video['duracao']) ?></span>
                    </div>

                    <!-- Foto do Usuário -->
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-5">
                        <img src="<?php echo htmlspecialchars($video['foto_usuario']) ?>" alt="Foto do Usuário" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Capa do Vídeo -->
                <div class="w-full h-1/2">
                    <img src="<?php echo htmlspecialchars($video['capa']); ?>" class="w-full h-full object-cover">
                </div>

                <!-- Info do Vídeo -->
                <div class="text-white p-5 h-1/2 flex flex-col justify-between">
                    <p class="opacity-50"><?php echo htmlspecialchars($video['usuario']) ?? 'Usuário'; ?></p>
                    <h3 class="text-xl font-medium"><?php echo htmlspecialchars($video['titulo']) ?? 'Carregando...'; ?></h3>
                    <p class="opacity-50"><?php echo number_format($video['visualizacoes']) ?? '0'; ?> K • <?php echo date('d/m/Y', strtotime($video['data_postagem'])); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
