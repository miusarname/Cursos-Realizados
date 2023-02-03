<?php

class persona
{
    public $nombre; //property
    private $edad;//Can only be modified within the class
    protected $altura;

    public function asignname($newname)
    { //actions or methods
        $this->nombre = $newname;
    }

    public function mostraredad(){
        //The private "property" inside the "method" is modified
        $this->edad = 20;
        return $this->edad;
    }
}

class worker extends persona{
    public $positionatwork;

    public function introduceYourselfAsaWorker(){
        echo 'Hola soy' . $this->nombre. "y trabajo como " . $this->positionatwork;
    }

}

//instance or new object
$objAlumno = new persona();
//Once instantiated, you can proceed to access the object to use the actions or methods
$objAlumno->asignname("Oscar");

echo $objAlumno->nombre; // Print a property


//Second object based on worker class

$objTrabajador = new worker();
$objTrabajador->asignname('Carlos');
$objTrabajador->positionatwork = 'Engineer';
$objTrabajador->introduceYourselfAsaWorker();
    ?>