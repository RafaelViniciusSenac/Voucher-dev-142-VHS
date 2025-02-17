<?php

    //

?>

<!-- H T M L -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>componente de card de video</title>
</head>

<body>

    <div class="container">
        <div class="card-de-video">
            <div class="container-capa">
                <img src="" alt="">
            </div> 

            <div class="container-info">
            <?php
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='card'>
                      <img class='card-img' src='https://cdn0.casamentos.com.br/vendor/7952/3_2/960/jpg/16125676385173_13_307952-161290249528500.jpeg' alt='img do card'>
                      <h3 class='card-title'>{$row['nome']}</h3>
                      <p class='card-subtitle'>{$row['descricao']}</p>
                      <p class='card-subtitle'>Capacidade: {$row['capacidade']}</p>
                      <button class='reservar-btn' data-id='{$row['id_espaco']}'>Reservar</button>
                  </div>";
              }
          } else {
              echo "<p>Nenhum vídeo publicado ainda.</p>";
          }
          ?>    
            </div>
        </div>
    </div>

</body>
</html>

<!-- S T Y L E -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .card-de-video {
        overflow: hidden;
        color: #1b1b1b;
        width: 300px;
        height: 350px;
        background-color: rgb(27, 27, 27);
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .container-capa {
        width: 100%;
        height: 50%;
        background-color: #2a2a2a;
    }

    .container-capa img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container-info {
        width: 100%;
        height: 50%;
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .perfil {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .foto {
        width: 75px;
        height: 75px;
        border-radius: 100%;
        object-fit: cover;
        background-color: blue;
        overflow: hidden;
    }

    h3 {
        font-size: 16px;
        font-weight: 600;
        color: white;
    }

    p {
        font-size: 14px;
        color: grey;
    }
</style>