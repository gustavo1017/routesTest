<?php




Route::get('/',['as'=>'home','uses'=>'PagesController@home']);
//Asignandole nombre a la ruta
Route::get('contacto',['as' => 'contactos','uses'=>'PagesController@contact']);

/* Asi decimos que de no dar un nombre la variable se le asignaria como invitado*/
Route::get('saludos/{nombre?}',['as' => 'saludos','uses'=>'PagesController@saludos'])->where('nombre',"[A-Za-z]+"); //Validacion para el nombre
