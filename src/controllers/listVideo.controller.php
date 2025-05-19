<?php

namespace Src\Application\Controllers;

use Src\Infra\Models\VideoModel;
require_once __DIR__ . '/../infra/models/videoModel.php';

class ListVideoController {
    public function Handlee() {
        $model = new VideoModel();
        try{
            $listVideos = $model->listMostPopularVideo();
            if (empty($listVideos)){
                echo var_dump($listVideos);
                http_response_code(400);
                echo var_dump([
                    "success" => false,
                    "errors" => [
                        "error" => true,
                        "missing_fields" => [
                            "error_code" => 1,
                            "message" => "Lista vazia, videos não encontrados"
                            ]
                            ]
                        ]);    
                    }
            echo var_dump("LISTA VIDEOS:",$listVideos);
            return $listVideos; 

        }catch(\Throwable $th){
            http_response_code(500);
            echo var_dump([
                "success" => false,
                "errors" => [
                    "error" => true,
                    "message" => "Erro interno no servidor"
                    ]
                ]);
            }
        }

    public function listMostPopularVideoCategory(){
        $model = new VideoModel();
        try {
            if (!isset($_POST["category_id"])){
                http_response_code(400);
                echo var_dump([
                    "success" => false,
                    "errors" => [
                        "error" => true,
                        "missing_fields" => [
                            "error_code" => 1,
                            "message" => "id da categoria não encontrado"
                        ]
                    ]
                ]);
            }

            $listVideoCategory = $model->listMostPopularVideoCategory($_GET["category_id"]);

            if (empty($listVideoCategory)){
                http_response_code(400);
                echo var_dump([
                        "success" => false,
                        "errors" => [
                                    "error" => true,
                                    "missing_fields" => [
                                            "error_code" => 1,
                                "message" => "Lista vazia, videos não encontrados"
                            ]
                        ]
                    ]);
                }

            echo var_dump('LISTA CATEGORIA;',$listVideoCategory);
            return $listVideoCategory;
            
        }
        catch (\Throwable $th) {
            http_response_code(500);
            echo var_dump([
                "success" => false,
                "errors" => [
                    "error" => true,
                    "message" => "Erro interno no servidor"
                    ]
                ]);
                return;
            }  
    }
}

$a = new ListVideoController();
$_GET["category_id"];
$a->listMostPopularVideoCategory();