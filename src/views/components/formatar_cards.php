<?php

    $videos = [
        [
            "duration" => 360,
            "title" => "Como aprender programação do zero e se tornar um excelente desenvolvedor full stack",
            "username" => "Canal Dev",
            "thumbnail" => "https://t.ctcdn.com.br/69rFkwz-cdviPGZn2p_l6rJH0UA=/1200x675/smart/i533291.png",
            "photo" => "https://cdn.awsli.com.br/10/10790/produto/292478529/fix-copo-bola-foto-1-7hxddc8b9q.jpg",
            "views" => 1250000,
            "created_at" => "2024-03-10 15:00:00"
        ]
    ];

?>

<!-- # -->

<?php

    // FORMATAÇÃO DE DURAÇÃO

    function formatarDuracao($segundos) {

        $horas = floor($segundos / 3600);
        $min = floor(($segundos % 3600) / 60);
        $seg = $segundos % 60;
        if ($horas > 0) {
            return sprintf("%d:%02d:%02d", $horas, $min, $seg);
        }

        return sprintf("%d:%02d", $min, $seg);
    }
    
    // FORMATAÇÃO DE VISUALIZAÇÕES

    function formatarVisualizacoes($visualizacoes) {

        if ($visualizacoes >= 1000000000) {
            return round($visualizacoes / 1000000000, 1) . 'B';
        } elseif ($visualizacoes >= 1000000) {
            return round($visualizacoes / 1000000, 1) . 'M';
        } elseif ($visualizacoes >= 1000) {
            return round($visualizacoes / 1000, 1) . 'K';
        }

        return $visualizacoes;
    }

    // FORMATAÇÃO DE DATA DE POSTAGEM

    function tempoDecorrido($data) {

        $segundos = time() - strtotime($data);
        $minutos = floor($segundos / 60);
        $horas = floor($minutos / 60);
        $dias = floor($horas / 24);
        $semanas = floor($dias / 7);
        $meses = floor($dias / 30);
        $anos = floor($dias / 365);
        
        if ($anos > 0) return "$anos ano(s) atrás";
        if ($meses > 0) return "$meses mês atrás";
        if ($meses > 1) return "$meses meses atrás";
        if ($semanas > 0) return "$semanas semana(s) atrás";
        if ($dias > 0) return "$dias dia(s) atrás";
        if ($horas > 0) return "$horas hora(s) atrás";
        if ($minutos > 0) return "$minutos minuto(s) atrás";

        return "agora mesmo";
    }

?>