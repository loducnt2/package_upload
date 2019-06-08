<?php

/*Route::get('product/list', function(){
	//return "day lav view";
	return view('UploadFile::demoupload');
});*/


/*Route::group(['namespace' => 'Duc\Upload'], function(){
	Route::get('upload', 'UploadFileController@index');
});
*/
Route::get('product/list','Duc\Upload\UploadFileController@list');
Route::get('product/create','Duc\Upload\UploadFileController@getCreate');
Route::post('product/create','Duc\Upload\UploadFileController@postCreate');
