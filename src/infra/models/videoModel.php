<?php
namespace Src\Infra\Models;

require_once __DIR__ . '/../../infra/db/database.php';
use Database;
use PDO;

class VideoModel {
    private PDO $connection;

    public function __construct() {
        $this->connection = (new Database())->getConnection();
    }

    public function listMostPopularVideo(): array {
        $sql = "SELECT VIDEO.id_user ,VIDEO.nome AS video_nome, SUM(VIEW.views) AS total_views
        FROM VIDEO
        JOIN VIEW ON VIDEO.id = VIEW.id_video
        GROUP BY VIDEO.id
        ORDER BY total_views DESC LIMIT 4";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listMostPopularVideoCategory(int $category_id): array{
        $sql = "SELECT VIDEO.id_user ,VIDEO.nome AS video_nome, SUM(VIEW.views) AS total_views
        FROM VIDEO
        JOIN VIEW ON VIDEO.id = VIEW.id_video WHERE VIDEO.category_id = :category_id
        GROUP BY VIDEO.id
        ORDER BY total_views DESC LIMIT 8";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}