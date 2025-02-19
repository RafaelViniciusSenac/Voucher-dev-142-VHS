<?php

require "../components/utils/buttonComponent.php";
require "../components/utils/inputComponent.php";

use function Src\Views\Components\Utils\ButtonComponent;
use function Src\Views\Components\Utils\InputComponent;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Perfil</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-black text-white flex justify-center item-center w-screen h-screen">
    
    <div class="flex flex-col justify-center item-center w-full max-w-1/3">

        <div class="mb-10">
            <h1 class="font-semibold text-[30px]">Gerenciar Perfil</h1>
            <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        
        <div class="flex gap-6 ">
            <img src="../../../public/images/foto_perfil.svg" alt="">
            <div class="flex flex-col justify-center">
                <h1 class="font-semibold text-[20px]">Foto de perfil</h1>
                <p class="text-gray-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aut quisquam sed accusamus ipsa quod cupiditate, repudiandae odio eaque vero eligendi rem unde nulla molestiae omnis illo ut recusandae numquam!</p>
            </div>
        </div>

        <div class="flex flex-col gap-6 my-10">
            <?= InputComponent(type: "text", placeholder: "@Rafael", label: "Nome do usuário"); ?>
            
            <?= InputComponent(type: "email", placeholder: "rafaelbonitao@senac.ms.com", label: "Nome do usuário"); ?>
            
            <?= InputComponent(type: "password", placeholder: "***************", label: "Nome do usuário"); ?>
            
            <?= InputComponent(type: "text", placeholder: "Tecnologia, Estética", label: "Nome do usuário"); ?>
        </div>

        <div class="flex gap-10 justify-end">
            <?= ButtonComponent(text: "Cancelar", variant: "outline") ?>
            
            <?= ButtonComponent(text: "Salvar alterações", variant: "default") ?>
        </div>

    </div>

</body>
</html>