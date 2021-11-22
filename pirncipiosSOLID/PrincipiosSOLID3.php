<?php

/**
 * 
 *  Tercer principio de la metodologia SOLID o principio de Liskov Substitution.
 *  El cual no indica que una clase hija debe poder usarse como una clase padre 
 *  sin que esta cambie su comportamiento.
 * 
 **/

 //EN ESTE EJEMPLO USARERMOS LAS ACCINES DE LOS ANIMALES

 //====================CODIGO SIN USO DE LA METODOLOGIA==================//

 //==CREAMOS LA CLASE ABSTRACTA QUE SERAN LOS ANIMALES, DE ESTA SE HEREDARAN LAS FUNCIONES POSTERIORMENTE==//

 /*abstract class Animales{

    public function correr() : void{

    }
    public function caminar() : void{

    }

    public function cazar() : void{

    }

 }*/

 //==AHORA A LAS CLASES DERIBADAS SE LE HEREDA LA CLASE ANIMAL PARA PODER USAR LAS FUNCIONES DE DICHA CLASE==//

/* class Leon1 extends Animales{
     public function correr() : void{
         throw new Exception("No se pudo implementar");
     }

     public function correr() : void{
        throw new Exception("No se pudo implementar");
     }

     public function cazar() : void{
        throw new Exception("No se pudo implementar");
     }
 }
*/
 //=====================FIN DEL CODIGO DE EJEMPLO=====================//

 //========================IMPLEMENTACION DE LA METODOLOGIA SOLID TERCER PRINCIPIO============//

 
 //==EL COMPORTAMIENTO DE LAS FUNCIONES AHORA LO DECLARAREMOS COMO INTERFACES PARA HACER USO MAS FACIL DE ESTAS==//

 echo "
<p><h1>03. Principio de Liskov Substitution</h1>
Tercer principio de la metodologia SOLID o principio de Liskov Substitution.
El cual no indica que una clase hija debe poder usarse como una clase padre 
sin que esta cambie su comportamiento.
</p>
";


 interface Acorrer{
     public function Correr();
 }

 Interface Acazar{
    public function Cazar();
 }

 Interface Acaminar{
     public function Caminar();
 }

 //==AHORA CREAREMOS LAS CLASES RESPECTIVAS EXTENDIENDO LAS INTERFACES CREADAS ANTERIORMENTE==//

 class Leon implements Acorrer, Acaminar, Acazar{
     public function Cazar(){
        echo "El leon esta cazando";
     }

     public function Caminar(){
        $accion = "El leon esta caminando";
     }

     public function Correr(){
        $accion = "El leon esta corriendo";
     }
 }

 $leon = new Leon();//declaro la clase creada anteriormente
 $leon->Cazar();//llamo la funcion espefica para la gusqueda general

