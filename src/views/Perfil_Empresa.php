<?php
require "../../src/views/components/utils/buttonComponent.php";
            
use function Src\Views\Components\Utils\ButtonComponent;

require "../../src/views/components/header/headerComponent.php";

use function src\views\components\header\HeaderComponent;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
</head>
<body class="w-full min-h-screen bg-gradient-to-b from-[#20002c] to-[#000000] bg-no-repeat bg-cover bg-center">
    <div>
        <?php echo headerComponent(); ?>
    </div>
    <div class="p-4 sm:p-6 md:p-8 sm:ml-50 xs:p-4">
        <div class="relative w-full h-36 xs:h-48 sm:h-60 overflow-hidden z-0">
            <!-- Imagem maior -->
            <img src="../../public/logos/B&W.jpg" class="absolute right-0 h-full w-full object-cover" alt="Grande">
        </div>
        
        <div class="absolute xs:left-8 sm:left-70 top-55 xs:top-40 sm:top-95 w-24 xs:w-32 sm:w-40 h-24 xs:h-32 sm:h-40 rounded-[20%] border border-white/20 overflow-hidden z-10">
            <img src="../../public/logos/BillGates.webp" class="w-full h-full object-cover" alt="Pequena">
        </div>
        <div class="mt-0 sm:ml-0 xs:mt-20 sm:mt-0">
            <h1 class="text-white ml-2 xs:ml-4 sm:ml-55 text-xl xs:text-2xl sm:text-[30px] font-[Poppins] mb-0">Microsoft</h1>
            <div class="flex flex-col sm:flex-row lg:flex-row justify-between items-start sm:items-center">
                <div class="flex flex-wrap ml-2 xs:ml-4 sm:ml-0">
                    <p class="p-0 mt-0 text-gray-200 sm:ml-55 text-xs xs:text-sm sm:text-[15px] font-[Poppins]">4.5k de seguidores</p>
                    <p class="p-0 mt-0 ml-1 text-gray-200 text-xs xs:text-sm sm:text-[15px] font-[Poppins]]">|</p>
                    <p class="p-0 mt-0 ml-1 text-white text-xs xs:text-sm sm:text-[15px] font-[Poppins]">Parceiro</p>
                </div>
                <div class="w-[150px] xs:w-[150px] h-[35px] xs:h-[40px] mt-2 sm:-mt-6 bg-none text-white px-3 xs:px-4 py-1 xs:py-2 ml-0 xs:ml-4 text-sm xs:text-base">
                <?php echo ButtonComponent('Seguir','outline',null,'150px','35px')?>
                </div>

            </div>
        </div>
        <div class="flex flex-col lg:flex-row justify-between">
            <!-- Div da tabela agora vem primeiro -->
            <div class="w-full lg:w-[45%] order-1 lg:order-2 flex lg:justify-end">
                <table class="text-white mt-5 border-separate border-spacing-6 ">
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><img src="../../public/icons/Union.svg" alt=""></td>
                        <td><a class="text-cyan-500" href="">https://www.microsoft.com/pt-br</a></td>
                    </tr>
                    <tr>
                        <td><img src="../../public/icons/Vector1.svg" alt=""></td>
                        <td><a class="text-cyan-500" href="">Instagram</a></td>
                    </tr>
                    <tr>
                        <td><img src="../../public/icons/Vector.svg" alt=""></td>
                        <td><a class="text-cyan-500" href="">https://www.office.com/</a></td>
                    </tr>
                </table>
            </div>

            <!-- Div do parágrafo vem depois -->
            <div class="w-full lg:w-[50%] order-2 lg:order-1">
                <p class="text-gray-200 font-[Poppins] mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed lobortis urna. Suspendisse suscipit lorem in accumsan venenatis. Nunc iaculis vitae orci sed consequat. Suspendisse semper dolor urna, et dictum sem egestas egestas. Mauris dapibus aliquet neque, sit amet sodales lectus vehicula ac. Nulla non est quis tortor aliquam mollis eu et sem. Nullam tempus volutpat vestibulum. Nam porttitor fermentum est nec dapibus. Nulla cursus ante purus, at posuere justo venenatis sed. Etiam lacinia quam vitae mauris tincidunt ultricies. Maecenas ipsum dolor, blandit a sem </p>
            </div>
        </div>
        <h1 class="text-white ml-2 xs:ml-4 text-xl xs:text-2xl sm:text-[30px] font-[Poppins] mb-0">Conteúdo do canal</h1>
        <p class="p-0 mt-0 text-gray-200 text-xs xs:text-sm sm:text-[15px] font-[Poppins]">Confira os vídeos mais populares da nossa plataforma VHS</p>
    </div>
    
</body>
</html>