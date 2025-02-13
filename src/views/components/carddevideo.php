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
                <img src="https://img.global.news.samsung.com/br/wp-content/uploads/2023/04/m54_2.jpg" alt="">
            </div> 

            <div class="container-info">
                <p>Rafael Germinari</p>
                <span>Como fazer um kaiko em 10 passos simples</span>
                <p>53k views • 2 semanas atrás</p>
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
        color: white;
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