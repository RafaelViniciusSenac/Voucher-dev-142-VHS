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
        $min = floor($segundos / 60);
        $seg = $segundos % 60;
        return sprintf("%d:%02d", $min, $seg);
    }

    function formatarVisualizacoes($visualizacoes) {
        if ($visualizacoes >= 1000000) {
            return round($visualizacoes / 1000000, 1) . 'M';
        } elseif ($visualizacoes >= 1000) {
            return round($visualizacoes / 1000, 1) . 'K';
        }
        return $visualizacoes;
    }

    function tempoDecorrido($data) {
        $segundos = time() - strtotime($data);
        $dias = floor($segundos / 86400);
        $semanas = floor($dias / 7);
        
        if ($semanas > 0) return "$semanas semanas atrás";
        if ($dias > 0) return "$dias dias atrás";
        return "hoje";
    }

?>