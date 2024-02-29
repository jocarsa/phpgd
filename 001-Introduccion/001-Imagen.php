<?php

    $imagen = imagecreatetruecolor(400,400);
    header('Content-type:image/png');
    imagepng($imagen);

?>