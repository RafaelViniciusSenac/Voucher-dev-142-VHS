<?php

namespace Src\Components\Utils;

function cardVideo (string $duration, string $thumbUrl, string $authorTitle, string $infoTitle, string $views, string $publishedAt){
    echo "
        <div class = 'video-card'>
        <div class = 'imgs'>
            <div class = 'temp'> $duration </div>
            <img src = '$thumbUrl' alt = ''>

        </div>
        <div class = 'info-video'>
            <div class = 'content'>
                <p class = 'info-author'>$authorTitle</p>
                <p class = 'info-title'>$infoTitle</p>
            </div>
            <div class = 'info-content'>
                <p>$views views • $publishedAt atrás</p>
            </div>
        </div>
    </div>
    ";
}


