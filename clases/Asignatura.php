<?php
class Asignatura {
    //Atributos
    private int $id;
    private string $nombre;
    private int $creditos;

    public function __construct(string $nombre, int $creditos) {
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    //getter
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCreditos(): int {
        return $this->creditos;
    }

    //Funcion que devuelve array de los datos de las asignaturas
    public static function crearAsignaturasMuestra(): array {
        return [
            new Asignatura("DWES", 7),
            new Asignatura("DWEC", 6),
            new Asignatura("DIW", 4),
            new Asignatura("DAW", 4)
        ];
    }
}
?>