<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $URL = Config::get('TENANT_NAME');
    if($URL == 'default')
    {
        return view('welcome');
    } else {
        return view('users.home.welcome');
    }
});




Route::get('tenants', 'TenantController@create')->name('register.tenant');
Route::post('tenants', 'TenantController@store')->name('store.tenant');
Route::post('/registrationsettings', 'SettingController@store')->name('settings');
// Route::post('/accountsettings','SettingController@account_setting');
Route::post('accountsettings','SettingController@account_setting')->name('accountsettings');
  

Route::post('authenticate', 'LoginController@authenticage')->name('login.authenticate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('load/{name}', ['middleware' => [], function($name) {

    return view('layouts.includes.'.$name);
}]);

Route::middleware(['auth'])->group(function () {

    Route::resource('settings', 'SettingController');

});



