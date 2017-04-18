<?php
Auth::routes();
Route::get('/', 'IndexController@getIndex')->name('home');
//Route::get('/sendmail', 'IndexController@sendMail');

Route::get('/logout', 'AdminController@authLogout');



Route::group(['middleware' => ['check_auth']], function () {
	Route::get('/admin', 'AdminController@getIndex');

	Route::get('/admin/settings', 'SettingsController@getSettings');
	Route::post('/admin/settings/edit', 'SettingsController@editSettings');
});
