<?php
//Aqui incluyo la clase Miembro por si me da algun error de union entre clases
include_once 'Miembro.php';
class Alumno extends Miembro {
    //Atributos
    private array $asignaturas = [];
    private int $edad;

    //Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
    }
    //Getter
    public function getEdad(): int {
        return $this->edad;
    }

    public function getAsignaturas(): array {
        return $this->asignaturas;
    }

    public function getNumeroAsignaturas(): int {
        return count($this->asignaturas);
    }

    //Funcion que sirve para que un usuario no este matriculado en una asinatura por duplicado
    public function matricularseEnAsignatura(Asignatura $asignatura): void {
        foreach ($this->asignaturas as $asig) {
            if ($asig->getNombre() === $asignatura->getNombre()) {
                return; // Ya está matriculado
            }
        }
        $this->asignaturas[] = $asignatura;
    }


    //Funcion para crear un array con los datos de los alumnos. En este metodo ingreso manualmente los datos y ademas para que funcione correctamente en el index la parte de alumnos con al menos 2 asig y asignaturas con algun alumno, ingreso en cada alumno las asignaturas matriculadas y cuales son.
    public static function crearAlumnosMuestra(array $asignaturas): array {
        $alumno1 = new Alumno(1, "Laura", "Martínez", "laura@email.com", 22);
        $alumno1->matricularseEnAsignatura($asignaturas[0]); // DWES. En este caso seria la posicion 0 del array se corresponde a DWES.
       
        $alumno2 = new Alumno(2, "Sergio", "López", "sergio@email.com", 25);
        $alumno2->matricularseEnAsignatura($asignaturas[0]); // DWES
        $alumno2->matricularseEnAsignatura($asignaturas[1]); // DWEC
    
        $alumno3 = new Alumno(3, "Carlos", "García", "carlos@email.com", 24);
        $alumno3->matricularseEnAsignatura($asignaturas[1]); // DWEC
        $alumno3->matricularseEnAsignatura($asignaturas[2]); // DIW
    
        $alumno4 = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumno4->matricularseEnAsignatura($asignaturas[0]); // DWES
    
        $alumno5 = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
        $alumno5->matricularseEnAsignatura($asignaturas[0]); // DWES
        $alumno5->matricularseEnAsignatura($asignaturas[2]); // DIW
    
        $alumno6 = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumno6->matricularseEnAsignatura($asignaturas[1]); // DWEC
    
        $alumno7 = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumno7->matricularseEnAsignatura($asignaturas[2]); // DIW
    
        $alumno8 = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumno8->matricularseEnAsignatura($asignaturas[2]); // DIW
    
        $alumno9 = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumno9->matricularseEnAsignatura($asignaturas[1]); // DWEC
    
        $alumno10 = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);
        $alumno10->matricularseEnAsignatura($asignaturas[2]); // DIW
    
        return [$alumno1, $alumno2, $alumno3, $alumno4, $alumno5, $alumno6, $alumno7, $alumno8, $alumno9, $alumno10];
    }
}
?>