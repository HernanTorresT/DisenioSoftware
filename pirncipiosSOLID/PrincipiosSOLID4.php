<?php

echo "
<p><h1>04. Principio de segregación de interfaz</h1>
Ningun cliente deberia estar obligado a depender de los metodos que no utliza
</br></br>
Ejemplo:
A continuacion, veremos una muestra de este principio donde se presenta toda una 
crud para categoria pero donde solo mostraremos los metodos de consultar sin depender del resto de la crud</p>
 ";
 //Clase para todo el tema de consultas
class Consultar
{
    public function consulta(int $id)
    {
        //Aqui va el codigo nesesario para consultar una categoria en especifico
        echo "-aqui se muestra la categoria especifica a consultar. En este caso la que corresponde a el id: $id </br>";
    }
    public function consultarTodo()
    {
        //Aqui va el codigo nesesario para consultar todas las categorias
        echo "</br>-Aqui se mostria todos las categoria consultadas</br>";
    }
}

//Clase para agregar y editar categorias
class AgregarEditar
{
    public function Agregar()
    {
        //Aqui va el codigo nesesario para agregar una categoria
        echo "Aqui agrega una categoria";
    }
    public function Editar(int $id)
    {
        //Aqui va el codigo nesesario para Editar una categoria
        echo "Aqui edita la categoria que se aya selecionado. En este caso la $id";
    }
}
//Clase para eliminar categorias
class Eliminar
{
    public function __construct()
    {
        
    }
    public function Eliminar(int $id)
    {
        //Aqui va el codigo nesesario para Eliminar una categoria
        echo "Aqui elimina la categoria que se aya selecionado. En este caso la $id";
    }
}

/*

En la siguiente parte se muestra el codigo necesario para el uso del codigo anterior

*/
$idBusqueda = 1327;//Asigno la variable especifica para la busqueda si es necesario
$Usuario = new Consultar();//declaro la clase creada anteriormente para consultar
$Usuario->consulta($idBusqueda);//llamo la funcion de busqueda especifica y envio el dato a buscar  
$Usuario->consultarTodo();//llamo la funcion espefica para la gusqueda general