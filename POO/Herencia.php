<?php 

//Clase padre
class Padre{

    public function Metodo_Padre(){
        echo "I'm your father.";
    }

    public function Same(){ //MISMO....................................
        echo 'Metodo de padre';
    }
}


//Clase HIJO
class Hijo extends Padre{

    public function Metodo_Hijo(){
        echo "I'm your child, your litlet son...";
    }

    public function Same(){ //MISMO....................................
        echo 'Metodo de hijoooooooo';
    }

    public function Redundar(){
        echo parent::Same(); // Con parent referencia al metodo padre.
    }

}


$Obj1 = new Padre();
$Obj2 = new Hijo();

$Obj2-> Redundar();