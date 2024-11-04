<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblioteca</title>
</head>
<body>
<?php
    //Pasar el array con los datos de los libros
    $libros = [  
        "libro1" => [  
        "titulo" => "PHP para Principiantes",  
        "autor" => "Carlos Ruiz",  
        "precio" => 19.99,  
        "categoria" => "Desarrollo web"  
        ],  
        "libro2" => [  
        "titulo" => "JavaScript Avanzado",  
        "autor" => "Laura García",  
        "precio" => 25.99,  
        "categoria" => "Desarrollo web"  
        ],  
        "libro3" => [  
        "titulo" => "Algoritmos en Python",  
        "autor" => "Miguel Fernández",  
        "precio" => 29.99,  
        "categoria" => "Algoritmos"  
        ]  
    ];
?>
<!--Crear tabla para que queden visibles los datos-->
<h2>Información de todos los libros</h2>
<table border="1">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>
    <!--Ingresar los datos en la tabla-->
    <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
            <td><?php echo htmlspecialchars($libro['autor']); ?></td>
            <td><?php echo htmlspecialchars($libro['precio']); ?></td>
            <td><?php echo htmlspecialchars($libro['categoria']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<h2>Libros de la categoría Desarrollo Web</h2>
<ol>
    <?php foreach ($libros as $libro): ?>
        <?php if ($libro['categoria'] === 'Desarrollo web'): ?>
            <li><?php echo htmlspecialchars($libro['titulo']); ?> por <?php echo htmlspecialchars($libro['autor']); ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ol>
</body>
</html>