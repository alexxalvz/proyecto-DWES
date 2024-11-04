<?php
//Aqui incluyo la clase Miembro por si me da algun error de union entre clases
include_once 'Miembro.php';
class Profesor extends Miembro {
    //Atributos
    private int $numeroAsignaturas;
   

    //Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $numeroAsignaturas) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->numeroAsignaturas = $numeroAsignaturas;
    }

    //Funcion para devolver un array de datos de profesores.
    public static function crearProfesoresMuestra(): array {
        return [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", 3),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", 2),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", 3 ),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", 5)
        ];
    }
}
?>