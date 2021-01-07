<?php


class persona{

    public $name;
    public $lastname;
    private $age;


    public function insertData($a){
        
        $this->name = $a;
        return $this->name;
       
    }

}


$objeto = new persona();

var_dump ($objeto->insertData('Julien'));


?>