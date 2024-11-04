<?php
class TriangleGenerator {
    public static function generateTriangle(int $altura): string
    {
        $resultado="<pre>";
        $cont = 0;
 
        for ($i = 0; $cont < $altura; $i++) {
            if (!($i % 2)) {
 
                for ($j = 0; $j < ($altura - ($cont + 1)); $j++) {
                    $resultado.= "&nbsp;";
                }
                for ($k = 0; $k <= $i; $k++) {
                    $resultado.= "*";
                }
                $resultado.= "<br>";
                $cont++;
            }
        }
 
        $resultado .= "</pre>";
        return $resultado;
    }
}