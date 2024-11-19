<?php

namespace Src\Components\Utils;

function inputComponent(string | null $title, string | null $description, string | null $label, string $placeholder, string | null $icon) {
    $title = $title ? "<h2 class='input-title'>$title</h2>" : '';
    $description = $description ? "<p class='input-description'>$description</p>" : '';
    $label = $label ? "<label for='input'>$label</label>" : '';
    $icon = $icon ? "<img src='$icon' class='icon'/>" : '';
    
    echo "
    <div>
        $title
        $description
        $label
        <div class='input-control'>
            <input type='text' placeholder='$placeholder'/>
            $icon
        </div>
    </div>
    ";
}
?>