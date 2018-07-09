<?php


Route::get('/', function(){
   
	return view('home');//llamando a la vista home.php

});
//Asignandole nombre a la ruta
Route::get('contacto',['as' => 'contactos', function(){

	return "Seccion de contactos";

}]);
/* Asi decimos que de no dar un nombre la variable se le asignaria como invitado*/
Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
    /*compact devuelve un array con la llave nombre y valor nombre siempre y cuando  exista*/
	return view('saludo', compact('nombre'));
   
})->where('nombre',"[A-Za-z]+"); //Validacion para el nombre
