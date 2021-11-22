<?php

echo "
<p><h1>01. Principio de responsabilidad única</h1>
En lugar de hacer la creacion del pedido y el envio del mismo en una sola clase
usamos el primer principio de SOLID el cual nos indica seccionar las funciones,
y que cada clase se haga cargo de una parte del procedimiento, en este caso
vemos que una clase hace el envio del pedido por correo y otra clase crea dicho pedido
</p>
";



class ServicioEnvio {

    public function Envio(string  $to,string  $subject,string  $body)
    {
        echo "Se envio correctamente el correo a: $to. </br></br>
        El correo fue: $body";
    }

}

class Pedido 
{
    
    /*private servicioEnvio $ServicioEnvio;

    public function __construct(ServicioEnvio $ServicioEnvio){
        $this->$ServicioEnvio = $ServicioEnvio;
    }*/

    public function Agregar() {

        /*
        * PASOS DEL CODIGO
        *
        * 01. Se crea el codigo para crear el pedido del
        *
        * 02. Se notifica al cliente mediante el correo
        */

        $IdOrden = rand(300,5000);

        $to         = "correoPrueba@gmail.com";
        $subject    = "Se creo su pedido de compra #2021-$IdOrden";
        $body       = "Estimado ususrio, se a creado su pedido correctamente, anexamos la orden de compra: #2021-$IdOrden, Por favor cualquier inquetud
                    consultar el siguiente corres. SoportePrueba@gmail.com";

        $ServicioEnvio = new ServicioEnvio();

        $ServicioEnvio->Envio($to, $subject, $body);
        
        $envio = "Mensaje enviado con exito";
        return $envio;
    }

}

$Pedido = new Pedido();

$Pedido->Agregar();