<?php
require_once __DIR__ . '/../components/CompBotoes.php';

use MeuProjeto\Components\CompBotoes;

$botoes = [
    ['texto' => 'Vídeos', 'link' => './VideosPage.php'],
    ['texto' => 'Fast', 'link' => './FastPage.php'],
    ['texto' => 'Eventos', 'link' => './EventosPage.php'],
    ['texto' => 'Canais', 'link' => './CanaisPage.php']
];

// Chame o método estático
// em "Videos" e "Sub-titulo" é onde deve ir o resultado da pesquisa 
echo CompBotoes::render("Videos ", "Sub-titulo", $botoes,);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="icon" href="../public/img/logo.svg">
    <!-- Incluindo o Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full min-h-screen bg-gradient-to-b from-[#20002c] to-[#000000] bg-no-repeat bg-cover bg-center text-white">

    <div class="flex flex-col md:flex-row min-h-screen mt-10 ml-20">
        <div class="flex-1 p-4 sm:p-6 md:pt-16">
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!--CONTEUDO  AQUI !!! -->
            </div>
        </div>
    </div>
</body>
</html>