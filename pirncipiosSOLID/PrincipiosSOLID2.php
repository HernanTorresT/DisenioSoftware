<?php

echo "
<p><h1>02. Principio de abierto/cerrado</h1>
Todo Modulo, clase y metodo debe estar abierto para su extencion o uso pero 
cerrrado para su modificación </br></br>
Ejemplo:
A continuacion, veremos una muestra de este principio donde se presenta la consulta
de datos donde una es en general y otra especifica.
</p>
";


class Usuario
{
    private $variableBusqueda;

    public function busquedaGeneral()
    {
        //Aqui se hace el codigo necesario para la consulta general de los datos
        echo "Aqui se muestra la busqueda de todos los datos</br></br>";
    }
    
    public function busquedaEspecifica($variableBusqueda)
    {
        //Aqui se hace el codigo necesario para la consulta especifica de datos
        echo "Aqui se muestra la busqueda del dato especifico que se envio. El dato enviado es: " . $variableBusqueda;
    }
    
}

/*

En la siguiente parte se muestra el codigo necesario para el uso del codigo anterior

*/
$variableBusqueda = "Toma que se llama Manolo";//Asigno la variable especifica para la busqueda si es necesario
$Usuario = new Usuario();//declaro la clase creada anteriormente
$Usuario->busquedaGeneral();//llamo la funcion espefica para la gusqueda general
$Usuario->busquedaEspecifica($variableBusqueda);//llamo la funcion de busqueda especifica y envio el dato a buscar