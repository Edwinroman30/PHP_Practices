<?php



    function alert($a){
        echo '<script>alert("'.$a.'");</script>';
    }

/* 

alert('Hola a todos');
 */

/* interface InterfaceA(){
    public function un_metodo_publico();
    private function un_metodo_privado();
}

interface InterfaceB(){
    public function un_metodo_publico();
    private function un_metodo_privado();
} */


class cisi{
    function __construct($valor,$edad){
        alert($valor);
        alert('y su edad es > '.$edad);
    }


    function __destruct(){
       
    }


}


$instansce = new cisi('Hola este es el mensaje que te deje.',33);

