<?php
namespace Src\Infra\Models;

require_once __DIR__ . '/../../infra/db/database.php';
use Database;
use PDO;

class FastModel {
    private PDO $connection;

    public function __construct() {
        $this->connection = (new Database())->getConnection();
    }

    public function create(string $id_user, string $url, string $thumbnail_url, string $title, string $description, string $duration, string $target_audience, string $category_id, string $type): bool {
        $sql = "INSERT INTO fast (id, id_user, url, thumbnail_url, title, description, duration, target_audience, category_id, type) VALUES (:id, :id_user, :url, :thumbnail_url, :title, :description, :duration, :target_audience, :category_id, :type)";

        $id = uniqid();

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":id_user", $id_user);
        $stmt->bindParam(":url", $url);
        $stmt->bindParam(":thumbnail_url", $thumbnail_url);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":duration", $duration);
        $stmt->bindParam(":target_audience", $target_audience);
        $stmt->bindParam(":category_id", $category_id);
        $stmt->bindParam(":type", $type);
        
        return $stmt->execute();
    }

}