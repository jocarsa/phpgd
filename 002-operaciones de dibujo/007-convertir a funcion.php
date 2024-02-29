<?php
    function graficaTarta($datos){
        $imagen = imagecreatetruecolor(400,400);
        $suma = array_sum($datos);
        $blanco = imagecolorallocate($imagen,255,255,255);  
        imagefilledrectangle($imagen,0,0,400,400,$blanco);
        $anguloactual = 0;
        foreach($datos as $porcion){     
            $color = imagecolorallocate($imagen,rand(0,255),rand(0,255),rand(0,255));  
            imagefilledarc(
                $imagen,
                200,
                200,
                200,
                200,
                $anguloactual,
                $anguloactual+($porcion/$suma)*360,
                $color,
                IMG_ARC_PIE
            );
            $anguloactual += ($porcion/$suma)*360;
        }
        header('Content-type:image/png');
        imagepng($imagen);
    }
    
    graficaTarta([400,600,300,200,100])

?>