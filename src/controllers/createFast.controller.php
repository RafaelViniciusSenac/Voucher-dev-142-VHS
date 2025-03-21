<?php

namespace Src\Application\Controllers;

use Src\Infra\Models\FastModel;

class CreateFastController {

    public function handle() {
        try {
            if (!isset($_POST["url"]) || !isset($_POST["thumbnail_url"]) || !isset($_POST["title"]) || !isset($_POST["description"]) || !isset($_POST["duration"]) || !isset($_POST["target_audience"]) || !isset($_POST["type"])) {
                http_response_code(400);
                return [
                    "success" => false,
                    "errors" => [
                        "error" => true,
                        "missing_fields" => [
                            "error_code" => 1,
                            "message" => "Campos obrigatórios não preenchidos"
                        ]
                    ]
                ];
            }

            $url = $_POST["url"];
            $thumbnail_url = $_POST["thumbnail_url"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $duration = $_POST["duration"];
            $target_audience = $_POST["target_audience"];
            $type = $_POST["type"];

            $errors = [
                "error" => false,
                "url" => ["error_code" => 0, "message" => ""],
                "thumbnail_url" => ["error_code" => 0, "message" => ""],
                "title" => ["error_code" => 0, "message" => ""],
                "description" => ["error_code" => 0, "message" => ""],
                "duration" => ["error_code" => 0, "message" => ""],
                "target_audience" => ["error_code" => 0, "message" => ""],
                "type" => ["error_code" => 0, "message" => ""]
            ];

            if (strlen($title) < 3) {
                http_response_code(400);
                $errors["error"] = true;
                $errors["title"]["error_code"] = 1;
                $errors["title"]["message"] = "O título deve ter no mínimo 3 caracteres";
            }

            if (strlen($title) > 255) {
                http_response_code(400);
                $errors["error"] = true;
                $errors["title"]["error_code"] = 1;
                $errors["title"]["message"] = "O título deve ter no máximo 255 caracteres";
            }

            if (strlen($description) > 255) {
                http_response_code(400);
                $errors["error"] = true;
                $errors["description"]["error_code"] = 1;
                $errors["description"]["message"] = "A descrição deve ter no máximo 255 caracteres";
            }

            if (!is_numeric($duration) || $duration <= 0) {
                http_response_code(400);
                $errors["error"] = true;
                $errors["duration"]["error_code"] = 1;
                $errors["duration"]["message"] = "A duração deve ser um número válido e maior que zero";
            }

            if ($errors["error"]) {
                return [
                    "success" => false,
                    "errors" => $errors
                ];
            }
            $created_at = date("Y-m-d H:i:s");
            $updated_at = date("Y-m-d H:i:s");

            $fastModel = new FastModel();
            $fastModel->create(
                $title, 
                $description, 
                $duration, 
                $target_audience, 
                $type, 
                $url, 
                $thumbnail_url,
                $created_at,
                $updated_at
            );

            return [
                "success" => true,
                "message" => "Conteúdo criado com sucesso!"
            ];

        } catch (\Throwable $th) {
            http_response_code(500);
            return [
                "success" => false,
                "errors" => [
                    "error" => true,
                    "message" => "Erro interno no servidor"
                ]
            ];
        }
    }
}
