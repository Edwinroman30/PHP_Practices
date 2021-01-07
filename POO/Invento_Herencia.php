<?php 

class Padre{

    public $nombre;
    public $apellido;

    public function Getinfo($nombre,$apellido){
        $this->nombre = $nombre;
        $this ->apellido = $apellido;
        echo '<script>alert("Mr.'.$nombre.' el proceso esta completo")</script>';
    }

    public function Talk($mensage){
        echo '<b>Remitente:</b> '.$mensage;
    }

    public function Farewell($mensage){
        echo self::Talk($mensage).', hasta pronto';
    }

    public function Metodo_padre(){
        echo 'Soy tu padre..........';
    }

}


$instances = new Padre();
echo '<br>';
$instances->Getinfo('Edwin','Roman');
echo '<hr>';
$instances ->Talk('Hola a todos.....');
echo '<hr>';
/* $instances ->Farewell('Hello, amigos.'); */


class Hijo extends Padre{
    public function Metodo_hijo(){
        echo 'Soy un hijo';
    }
}

$x=10;
for($i=0;$i<$x;$i++){
    echo '<br>';
}

$instancia_hijo = new Hijo();

$instancia_hijo ->Metodo_hijo();
$instancia_hijo -> Metodo_padre();
