<?php

    $imagen = imagecreatetruecolor(400,400);

    $azul = imagecolorallocate($imagen,0,0,255);  
    imagefilledrectangle($imagen,0,0,400,400,$azul);
    
    $verde = imagecolorallocate($imagen,0,255,0);
    imagefilledrectangle($imagen,100,100,300,300,$verde);

    header('Content-type:image/png');
    imagepng($imagen);

?>