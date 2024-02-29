<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagefilledarc(
        $imagen,
        200,
        200,
        200,
        200,
        0,
        200,
        $azul,
        IMG_ARC_PIE
    );

    header('Content-type:image/png');
    imagepng($imagen);

?>