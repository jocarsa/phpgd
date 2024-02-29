<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagefilledellipse(
        $imagen,
        200,
        200,
        150,
        150,
        $azul
    );

    header('Content-type:image/png');
    imagepng($imagen);

?>