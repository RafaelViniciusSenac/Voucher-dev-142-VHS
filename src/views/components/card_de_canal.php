<?php

    require_once './formatar_cards.php';

    function gerarCardCanal($video) {
        $thumbnail_url = htmlspecialchars($video['thumbnail_url']);
        $username = htmlspecialchars($video['username']);
        $title = htmlspecialchars($video['title']);
        
        $duration = formatarDuracao('1000');
        $visualizations = formatarVisualizacoes($video['visualizations']);
        $create_at = tempoDecorrido($video['create_at']);

        return "
            <div class='relative w-[320px] h-[400px] bg-[#1e1e2a] rounded-3xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300'>
                
                <!-- Capa do vídeo -->

                <div class='relative w-full h-[50%]'>
                    <img src='$thumbnail_url' class='w-full h-full object-cover'>
                    <!-- Duração no canto superior direito -->
                    <div class='absolute top-3 right-3 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded-md'>
                        $duration
                    </div>
                </div>

                <!-- Informações do vídeo -->

                <div class='p-4 text-white flex flex-col justify-between h-[45%]'>
                    <p class='text-gray-400 text-sm'>$username</p>
                    <h3 class='text-lg font-bold leading-tight break-words overflow-hidden line-clamp-3' style='
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        text-overflow: ellipsis;'>
                        $title
                    </h3>
                    <p class='text-gray-400 text-sm'>$visualizations views • $create_at</p>
                </div>
            </div>
        ";
    }

?>