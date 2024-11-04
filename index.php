<?php
//necesario incluir las clases
include_once 'clases/Alumno.php';
include_once 'clases/Profesor.php';
include_once 'clases/Asignatura.php';

//Crear lista de asignaturas primero
$asignaturas = Asignatura::crearAsignaturasMuestra();

//Crear listas de alumnos y profesores
$alumnos = Alumno::crearAlumnosMuestra($asignaturas);
$profesores = Profesor::crearProfesoresMuestra();

//Alumnos menores o iguales a 23 años
$alumnosMenoresIguales23 = array_filter($alumnos, fn($alumno) => $alumno->getEdad() <= 23);

//Alumnos con al menos dos asignaturas
$alumnosConDosAsignaturas = array_filter($alumnos, fn($alumno) => $alumno->getNumeroAsignaturas() >= 2);

//Obtener asignaturas con al menos un alumno matriculado
$asignaturasConAlumnos = array_filter($asignaturas, function($asignatura) use ($alumnos) {
    foreach ($alumnos as $alumno) {
        if (in_array($asignatura, $alumno->getAsignaturas(), true)) {
            return true;
        }
    }
    return false;
});
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de Alumnos, Profesores y Asignaturas</title>
    <style>
        body { font-family: monospace; }
    </style>
</head>
<body>
    <!--Mostrar datos alumnos por pantalla-->
    <h2>Alumnos</h2>
    <ul>
        <?php foreach ($alumnos as $alumno): ?>
            <li>Nombre: <?= $alumno->getNombreCompleto(); ?>, Email: <?= $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <!--Mostrar datos profesores por pantalla-->       
    <h2>Profesores</h2>
    <ul>
        <?php foreach ($profesores as $profesor): ?>
            <li>Nombre: <?= $profesor->getNombreCompleto(); ?>, Email: <?= $profesor->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <!--Mostrar datos asignaturas por pantalla-->
    <h2>Asignaturas</h2>
    <ul>
        <?php foreach ($asignaturas as $asignatura): ?>
            <li>Nombre: <?= $asignatura->getNombre(); ?>, Créditos: <?= $asignatura->getCreditos(); ?></li>
        <?php endforeach; ?>
    </ul>

    <!--Mostrar datos alumnos menores o iguales a 23 años por pantalla-->
    <h2>Alumnos <= 23 años</h2>
    <ul>
        <?php foreach ($alumnosMenoresIguales23 as $alumno): ?>
            <li>Nombre: <?= $alumno->getNombreCompleto(); ?>, Email: <?= $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    </ul>

    <!--Mostrar datos alumnos con por lo menos dos asignaturas por pantalla-->
    <h2>Alumnos con al menos dos asignaturas</h2>
    <ul>
    <?php if (count($alumnosConDosAsignaturas) > 0): ?>
        <?php foreach ($alumnosConDosAsignaturas as $alumno): ?>
            <li>Nombre: <?= $alumno->getNombreCompleto(); ?>, Email: <?= $alumno->getEmail(); ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No hay alumnos matriculados en al menos dos asignaturas.</li>
    <?php endif; ?>
    </ul>

    <!--Mostrar datos asiganturas con algun alumno matriculado por pantalla-->
    <h2>Asignaturas con algún alumno matriculado</h2>
    <ul>
    <?php if (count($asignaturasConAlumnos) > 0): ?>
        <?php foreach ($asignaturasConAlumnos as $asignatura): ?>
            <li>Nombre: <?= $asignatura->getNombre(); ?>, Créditos: <?= $asignatura->getCreditos(); ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No hay asignaturas con alumnos matriculados.</li>
    <?php endif; ?>
    </ul>
</body>
</html>