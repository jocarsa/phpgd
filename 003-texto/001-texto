<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagefilledpolygon(
        $imagen,
        [
            50,50,
            150,50,
            250,150,
            250,350,
            50,50
        ],
        5,
        $azul
    );

    header('Content-type:image/png');
    imagepng($imagen);

?>