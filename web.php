<?php


Route::get('/', function(){

	echo "<a href=". route('contactos') .">Contactos</a><br>";
	echo "<a href=". route('contactos') .">Contactos</a><br>";
	echo "<a href=". route('contactos') .">Contactos</a><br>";
	echo "<a href=". route('contactos') .">Contactos</a><br>";
	echo "<a href=". route('contactos') .">Contactos</a><br>";

});
//Asignandole nombre a la ruta
Route::get('contacto',['as' => 'contactos', function(){

	return "Seccion de contactos";

}]);
/* Asi decimos que de no dar un nombre la variable se le asignaria como invitado*/
Route::get('saludos/{nombre?}',function($nombre = "Invitado"){

	return "Saludos $nombre";
   
})->where('nombre',"[A-Za-z]+"); //Validacion para el nombre
