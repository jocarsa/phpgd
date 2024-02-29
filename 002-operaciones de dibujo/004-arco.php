<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagearc(
        $imagen,
        200,
        200,
        100,
        100,
        0,
        200,
        $azul
    );

    header('Content-type:image/png');
    imagepng($imagen);

?>