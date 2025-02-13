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
            <div class="container-foto">
                <div class="foto">
                    
                </div>
            </div>

            <div class="container-capa">
                <img src="" alt="">
            </div> 

            <div class="container-info">
                <p>Rafael Germinari</p>
                <span>Como fazer um kaiko em 10 passos simples</span>
                <p>53k views • 2 semanas atrás</p>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap');

        * {
            font-family: "Poppins";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p {
            color: grey;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
        }
        
        .container-foto {
            position: sticky;
            display: flex;
            width: 100%;
            height: 100%;
            z-index: 1000;
            align-items: center;
            justify-content: flex-end;
            padding: 15px;
        }

        .foto {
            position: absolute;
            background-color: blue;
            width: 75px;
            height: 75px;
            position: absolute;
            border-radius: 100%;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-info {
            padding: 15px;
            display: flex;
            height: 50%;
            width: 100%;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-de-video {
            overflow: hidden;
            color: white;
            width: 300px;
            height: 350px;
            background-color: rgb(27, 27, 27);
            border-radius: 25px;
        }

        .container-capa {
            width: 100%;
            height: 50%;
            background-color: #2a2a2a;
        }
    </style>

</body>
</html>