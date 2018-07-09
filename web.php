<?php


Route::get('/', function(){

	return "Hola desde la pagina de inicio";

});

Route::get('contacto',function(){

	return "Hola desde la pagina de contacto";

});
/*El parametro nombre es obligatorio*/
Route::get('saludos/{nombre}',function($nombre){

	return "Saludos $nombre";

});