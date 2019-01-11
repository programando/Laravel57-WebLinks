<?php



Route::post('/grabar', 'WebLinkController@store');
Route::get('/listado', 'WebLinkController@Listar');
Route::get('/buscar', 'WebLinkController@Buscar');

Route::get ('/{any?}'             , 'WebLinkController@Index')->name('dashboad')->where('any','.*');

