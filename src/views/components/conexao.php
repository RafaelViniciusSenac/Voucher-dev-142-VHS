<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vhs_db";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM videos ORDER BY create_at DESC";
    $stmt = $conn->query($sql);
    $videos = $stmt->fetch_all(MYSQLI_ASSOC);
?>

<!-- # -->

<?php

    function formatarDuracao($segundos) {

        $horas = floor($segundos / 3600);
        $min = floor(($segundos % 3600) / 60);
        $seg = $segundos % 60;
        if ($horas > 0) {
            return sprintf("%d:%02d:%02d", $horas, $min, $seg);
        }

        return sprintf("%d:%02d", $min, $seg);
    }

    // ###########
    
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