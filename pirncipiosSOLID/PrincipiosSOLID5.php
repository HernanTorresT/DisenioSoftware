<?php

echo "
<p><h1>05. Principio de inversion de dependencia</h1>
No deben existir dependencias entre modulos, en especial entre modulos de bajo nivel y alto nivel
</br></br>
Ejemplo:
A continuacion, veremos una muestra de este principio donde despues de reservar una cita al spa
 nos manda una confirmacion al correo pero resulta que va hacer cambio de libreria para el envio de 
 correos y para evitar la refactorizacion del proyecto aplicamos el principio de inversion de dependecia
 </p>
 ";
//Esta es la Primera opcion de libreria para enviar emails
 class Libreria1
{
    public function enviarEmail($mensaje)
    {
        //Aqui va el codigo necesario para el envio del email con la libreria 1
        echo "Enviado desde la libreria 1 su mensaje es: $mensaje";
    }
}
//Esta es la segunda opcion de libreria para enviar emails
class Libreria2
{
    public function enviarEmail($mensaje)
    {
        //Aqui va el codigo necesario para el envio del email con la libreria 1
        echo "Enviado desde la libreria 2 su mensaje es: $mensaje";
    }
}
//Esta clase es para selecionar cual libreria ara el envio del mensaje
class selecionLibreria
{
    public function elegirLibreria(string $Libreria, string $Mensaje)
    {
        if ($Libreria == "opcion1") {
            $libreria1 = new Libreria1();
            $libreria1->enviarEmail($Mensaje);
        } else {
            $libreria2 = new Libreria2();
            $libreria2->enviarEmail($Mensaje);
        }
    }
}
//Esta clase es donde se hace la reserva para el spa
class reservacionSpa
{
    public function generarReservacion(string $opcionEmail, $Mensaje)
    {
        //Aqui va el codigo necesario para generar la reservacion
        
        $envioEmail = new selecionLibreria();
        $envioEmail->elegirLibreria($opcionEmail, $Mensaje);
    }
}
/*

En la siguiente parte se muestra el codigo necesario para el uso del codigo anterior

*/
$opcionEmail = "opcion2";
$mensaje = "Toma manolo que ya reservaste tu Spa";
$reservaSpa = new reservacionSpa();
$reservaSpa->generarReservacion($opcionEmail, $mensaje);