<?php


Route::get('/',['as' => 'home', function(){
   
	return view('home');//llamando a la vista home.php

}]);
//Asignandole nombre a la ruta
Route::get('contacto',['as' => 'contactos', function(){

	return "Seccion de contactos";

}]);
/* Asi decimos que de no dar un nombre la variable se le asignaria como invitado*/
Route::get('saludos/{nombre?}',['as' => 'saludos',function($nombre = "Invitado"){
    $html = "<h2>Contenido html</2>"; //Supuestamente ingresado por el usuario
	return view('saludo', compact('nombre','html'));
   
}])->where('nombre',"[A-Za-z]+"); //Validacion para el nombre
