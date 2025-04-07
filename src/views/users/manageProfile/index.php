<?php

namespace Src\Views\Components\Utils;

require "../../components/utils/buttonComponent.php";
require "../../components/utils/inputComponent.php";
           
use function Src\Views\Components\Utils\InputComponent;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Perfil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../../styles/tailwindglobal.js"></script>
</head>
<body class="bg-background">
    <div class="flex flex-col gap-4 p-6">
        <p class="font-pop font-semibold text-3xl text-secondary">Gerenciar Perfil</p>
        <div class="w-36 h-36 rounded-3xl bg-white">
            <img class="h-full w-full rounded-3xl" src="../../../../public/images/foto-sem-perfil.jpg" alt="">
        </div>
        <div class="w-[450px] flex flex-col gap-8">
            <div class="flex flex-col gap-6">
                <?= InputComponent(placeholder:"@UsuárioSenac123", type:"text", label:"Nome de Usuário", icon:"../../../../public/icons/userRound.svg",iconPosition: "right-3") ?>
                <?= InputComponent(placeholder:"Usuário123@gmail.com", type:"email", label:"E-mail", icon:"../../../../public/icons/userRound.svg",iconPosition: "right-3") ?>
                <?= InputComponent(placeholder:"Senha123", type:"password", label:"Senha", icon:"../../../../public/icons/userRound.svg",iconPosition: "right-3") ?>
                <?= InputComponent(placeholder:"Inovações de Tecnologias", type:"text", label:"Categorias de Interesse", icon:"../../../../public/icons/userRound.svg",iconPosition: "right-3") ?>
            </div>
            <div class="flex items-center w-full gap-4">
                <?= ButtonComponent("Cancelar", "outline", "", ) ?>
                <?= ButtonComponent("Salvar Alterações", "default", "", ) ?>
            </div>
        </div>
    </div>
    
</body>
</html>