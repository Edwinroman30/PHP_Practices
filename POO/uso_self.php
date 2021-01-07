<?php
//self:

//Hace referencia a la clase actual y generalmente lo usarías cuando no 
//se genera una instancia de la misma, como cuando usas métodos estáticos:

class prueba{

 static function funcionDePrueba($chango) {
    return 'HOLA ' . $chango .'!';
 }

 static function saludar($chango){
    echo self::funcionDePrueba($chango);
 }
}


prueba::saludar('Edwin'); //la función saludar imprime "HOLA Astaroth!" que es el regreso  de funcionDePrueba.

//this:

//Ahora, con this haces referencia al objeto actual. Esto es una clase que si tiene instancia:

/* class prueba{

 private function funcionDePrueba($chango) {
    return 'HOLA ' . $chango .'!';
 }

 static function saludar($chango){
    echo $this->funcionDePrueba($chango);
 }
}

(new prueba)->saludar('Astaroth'); */ //la función saludar imprime "HOLA Astaroth!" que es el regreso de funcionDePrueba
//Debes considerar que NO se puede hacer referencia a métodos estáticos usando this pero a métodos públicos, privados y protegidos.