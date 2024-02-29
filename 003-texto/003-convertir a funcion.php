<?php
    function graficaTarta($datos){
        $imagen = imagecreatetruecolor(800,400);
        $suma = array_sum($datos);
        $blanco = imagecolorallocate($imagen,255,255,255);  
        imagefilledrectangle($imagen,0,0,800,400,$blanco);
        $anguloactual = 0;
        $contador = 0;
        foreach($datos as $porcion){     
            $color = imagecolorallocate($imagen,rand(0,255),rand(0,255),rand(0,255));  
            imagefilledarc(
                $imagen,
                200,
                200,
                300,
                300,
                $anguloactual,
                $anguloactual+($porcion/$suma)*360,
                $color,
                IMG_ARC_PIE
            );
            $anguloactual += ($porcion/$suma)*360;
            imagefilledrectangle($imagen,370,$contador*20+40,380,$contador*20+50,$color);
            imagettftext(
                $imagen, 
                12, 
                0, 
                400, 
                $contador*20+50, 
                $color, 
                'Ubuntu-Regular.ttf', 
                $porcion." - ".(($porcion/$suma)*100)." %"
            );
            $contador++;
        }
        header('Content-type:image/png');
        imagepng($imagen);
    }
    
    graficaTarta([400,600,300,200,100,53,53,542,23,52,645,465,56])

?>