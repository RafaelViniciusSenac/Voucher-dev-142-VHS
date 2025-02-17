
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards de Vídeos</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900">
 
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        <?php
        if ($result->num_rows > 0) {
            while ($video = $result->fetch_assoc()) {
        ?>
        <div class="max-w-sm bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            
                <!-- thumbnail -->
            <div class="relative">
                <img class="w-full h-48 object-cover" src="<?= $video['thumbnail']; ?>" alt="Thumbnail do vídeo">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <a href="<?= $video['url']; ?>" target="_blank" class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center shadow-lg">
                        ▶
                    </a>
                </div>
            </div>
 
                <!-- conteúdo -->
            <div class="p-4">
                <h2 class="text-white text-lg font-bold"><?= htmlspecialchars($video['titulo']); ?></h2>
                <p class="text-gray-400 text-sm mt-1"><?= htmlspecialchars($video['descricao']); ?></p>
 
                <!-- botões -->
                <div class="mt-4 flex items-center justify-between">
                    <a href="<?= $video['url']; ?>" target="_blank" class="text-sm bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Assistir
                    </a>
                    <button class="text-sm text-gray-300 hover:text-gray-100">
                        + Adicionar à Lista
                    </button>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<p class='text-white'>Nenhum vídeo encontrado.</p>";
        }
        ?>
    </div>
 
</body>
</html>