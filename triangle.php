<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Triangulo</title>
<style>
    body {
    font-family: monospace;
    }
</style>
</head>
<body>
<?php
//Para llamar a la funcion del Generador del triangulo y mostrar por pantalla.
require ("./clases/TriangleGenerator.php");
echo TriangleGenerator::generateTriangle(6);
?>
</body>
</html>