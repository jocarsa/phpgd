<?php

    $imagen = imagecreatetruecolor(400,400);

    $azul = imagecolorallocate($imagen,0,0,255);
    
    imagefilledrectangle($imagen,0,0,400,400,$azul);

    header('Content-type:image/png');
    imagepng($imagen);

?>