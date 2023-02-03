<?php

class persona
{
    public $nombre; //property
    private $edad; //Can only be modified within the class
    protected $altura;

    function __construct($newname)
    {
        $this->nombre = $newname;
    }


    public function asignname($newname)
    { //actions or methods
        $this->nombre = $newname;
    }

    public function mostraredad()
    {
        //The private "property" inside the "method" is modified
        $this->edad = 20;
        return $this->edad;
    }
}
$objAlumno = new persona('Kelly');
$objAlumno = print($objAlumno->nombre);




?>