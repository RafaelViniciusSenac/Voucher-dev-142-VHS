<?php

require "../../components/utils/buttonComponent.php";

use function Src\Views\Components\Utils\ButtonComponent;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../../styles/tailwindglobal.js"></script>
</head>

<body>
    <div class="flex w-100 h-screen bg-background text-white">
        <div class="flex justify-center mr-24">
            <img src="../../../../public/images/Cassete.svg" alt="Fita Cassete" class="relative right-[110px] mr-28 w-[1100px]">
        </div>

        <div class="flex mt-24 flex-col">
            <div class="flex mt-20 ml-24 mb-5">
                <img src="../../../../public/logos/Logo.svg" alt="Logo">
            </div>

            <div>
                <h2 class="flex mt-0.7rem text-3xl font-semibold text-secondary">Selecione seus interesses</h2>
                <p class="text-gray200 flex justify-center mb-2 mt-2">Receba sugestão de vídeos relacionados.</p>
            </div>

            <div class="flex flex-col gap-5 mt-3">
                <?= ButtonComponent(text: "Estética", variant: "outline") ?>
                <?= ButtonComponent(text: "Saúde", variant: "outline") ?>
                <?= ButtonComponent(text: "Tecnologia", variant: "outline") ?>
                <?= ButtonComponent(text: "Moda", variant: "outline") ?>
                <?= ButtonComponent(text: "Continuar", variant: "default") ?>
            </div>
        </div>
</body>
</html>