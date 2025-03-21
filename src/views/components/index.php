<?php

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
    <link rel="stylesheet" href="../../styles/global.css">
</head>

<body class="bg-[#0c0118] flex items-center justify-center min-h-screen p-10">
    
    <div class="flex flex-wrap gap-10 justify-center">
        <div class="flex flex-col text-white items-center w-auto h-auto p-5 gap-5" style="background-color: rgba(255, 255, 255, 0.1); border-radius: 30px;">
            <h1>Card de vídeos</h1>

            <?php 
            foreach ($videos as $video) {
                echo gerarCardVideo($video);
            }
            ?>
        </div>

        <div class="flex flex-col text-white items-center w-auto h-auto p-5 gap-5" style="background-color: rgba(255, 255, 255, 0.1); border-radius: 30px;">
            <h1>Card de canal</h1>

            <?php 
            foreach ($videos as $video) {
                echo gerarCardCanal($video);
            }
            ?>
        </div>

        <div class="flex flex-col text-white items-center w-auto h-auto p-5 gap-5" style="background-color: rgba(255, 255, 255, 0.1); border-radius: 30px;">
            <h1>Meus cards</h1>

            <?php 
            // foreach ($videos as $video) {
            //     echo gerarMeuCard($video);
            // }
            ?>
        </div>
    </div>

</body>
</html>