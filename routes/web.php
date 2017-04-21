<?php
Auth::routes();
Route::get('/', 'IndexController@getIndex')->name('home');
//Route::get('/sendmail', 'IndexController@sendMail');

Route::post('/addmessage', 'IndexController@addMessage')->name('add_message');
Route::post('/addcall', 'IndexController@addCall');


Route::get('/logout', 'AdminController@authLogout');



Route::group(['middleware' => ['check_auth']], function () {
	Route::get('/admin', 'AdminController@getIndex');
	Route::get('/admin/messages', 'AdminController@getMessages');
	Route::get('/admin/calls', 'AdminController@getCalls');
	Route::post('/admin/calls/delete/{id}', 'AdminController@deleteCall');
	Route::get('/admin/texts', 'AdminController@getTexts');
	Route::post('/admin/texts/edit', 'AdminController@editTexts');
	Route::get('/admin/messages/{id}', 'AdminController@getMessage');
	Route::post('/admin/messages/delete/{id}', 'AdminController@deleteMessage');
	Route::get('/admin/images', 'AdminController@getImages');
	Route::post('/admin/images/edit/{id}', 'AdminController@editImage');
	Route::get('/admin/settings', 'SettingsController@getSettings');
	Route::post('/admin/settings/edit', 'SettingsController@editSettings');
});
