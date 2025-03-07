<?php
namespace Src\Infra\Models;

require_once __DIR__ . '/../../infra/db/database.php';
use Database;
use PDO;

class videoModel {
    private PDO $connection;

    public function __construct() {
        $this->connection = (new Database())->getConnection();
    }

    public function listMostPopularVideo(): string {
        $sql = "SELECT VIDEO.id_user ,VIDEO.nome AS video_nome, SUM(VIEW.views) AS total_views
        FROM VIDEO
        JOIN VIEW ON VIDEO.id = VIEW.id_video
        GROUP BY VIDEO.id
        ORDER BY total_views DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}