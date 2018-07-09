<?php


Route::get('/', function(){

	return "Hola desde la pagina de inicio";

});

Route::get('contacto',function(){

	return "Hola desde la pagina de contacto";

});
/* Asi decimos que de no dar un nombre la variable se le asignaria como invitado*/
Route::get('saludos/{nombre?}',function($nombre = "Invitado"){

	return "Saludos $nombre";
   
})->where('nombre',"[A-Za-z]+"); //Validacion para el nombre
