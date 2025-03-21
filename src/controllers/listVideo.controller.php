<?php

namespace Src\Application\Controllers;

use Src\Application\Utils\EmailTransporter;
use Src\Infra\Models\UserModel;

use function Src\Application\Utils\verifyRecaptcha;
require_once __DIR__ . '/../application/utils/verifyRecaptcha.php';
require_once __DIR__ . '/../application/utils/emailTransporter.php';
require_once __DIR__ . '/../infra/models/userModel.php';


class ListVideoController {
    public function handle() {
        
        try {
            if (!isset($_POST["categoty_id"])){
                http_response_code(400);
                return [
                    "success" => false,
                    "errors" => [
                        "error" => true,
                        "missing_fields" => [
                            "error_code" => 1,
                            "message" => "id da categoria não encontrado"
                        ]
                    ]
                ];
            }
        }
        

        catch (\Throwable $th) {
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