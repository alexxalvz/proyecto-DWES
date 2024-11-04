<?php
abstract class Miembro{
    //Atributos
    protected int $id;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;

    //Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    //Getter y setter
    public function getId(): int {
        return $this->id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    //getter necesrio para sacar el nombre y apellidos juntos como un solo valor
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    //Setter
    public function setId($id) {
        $this->id=$id;
    }

    public function setNombre($nombre) {
        $this->nombre=$nombre;
    }

    public function setApellido($apellidos) {
        $this->apellidos=$apellidos;
    }

    public function setEmail($email) {
        $this->email=$email;
    }
}
?>