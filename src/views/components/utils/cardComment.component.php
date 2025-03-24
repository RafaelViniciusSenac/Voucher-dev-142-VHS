<?php

function cardComment(string $photoPerfil, string $title, string $time, string $description){
    return " <div class='flex gap-3 '>
    <div>
        <img class='rounded-full size-[46px]' src='$photoPerfil' alt=''>
    </div>
    <div class='w-60'>
        <div class='flex gap-2'>
            <p class='text-sm text-white'>$title</p>
            <p class='text-[10px] text-[#AAAAAA] relative top-[4.2px]'>há $time</p>
        </div>
            <p id='descricao' class='text-[11px] text-[#AAAAAA] w-60'>$description</p>
        </div>
    </div>";
}

?>