<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagettftext(
        $imagen, 
        20, 
        0, 
        10, 
        100, 
        $azul, 
        'Ubuntu-Regular.ttf', 
        "Hola mundo desde PHP"
    );

    header('Content-type:image/png');
    imagepng($imagen);

?>