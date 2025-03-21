<?php

    require_once '../components/formatar_cards.php';
    require_once '../components/card_de_video.php';
    require_once '../components/card_de_canal.php';

?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0c0118] flex items-center justify-center min-h-screen p-10">
    
    <div class="flex flex-wrap gap-10 justify-center">
        <?php 
        foreach ($videos as $video) {
            echo gerarCardVideo($video);
        }
        ?>
    </div>

</body>
</html>