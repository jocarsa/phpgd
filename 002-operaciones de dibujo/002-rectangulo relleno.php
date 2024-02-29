<?php

    $imagen = imagecreatetruecolor(400,400);

    $blanco = imagecolorallocate($imagen,255,255,255);  
    imagefilledrectangle($imagen,0,0,400,400,$blanco);

    $azul = imagecolorallocate($imagen,0,0,255);
    imagefilledrectangle($imagen,100,100,300,300,$azul);

    header('Content-type:image/png');
    imagepng($imagen);

?>