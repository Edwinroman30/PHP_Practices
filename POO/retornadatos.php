<?php

class Retorno{

    public function returnString($anything){
        return $anything;
    }

    public function retornaArray($num){

       // $arreglo[];
        for($i=0;$i<$num;$i++){

            $arreglo[$i] = $i;
        }

        return $arreglo;
    }

    public function retornaJSON(){

        $APP = [
            'user' => 'Administrador',
            'password' => '12345',
            'privige' => 'sa'
        ];

        return json_encode($APP);

    }

}