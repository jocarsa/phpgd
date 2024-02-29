<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagestring($imagen, 5, 10, 100, "Hola mundo", $azul);

    header('Content-type:image/png');
    imagepng($imagen);

?>