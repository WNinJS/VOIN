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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = App\Category::all();
    $complexes = App\Complex::all();
    return view('mainContent')->with(compact('complexes','categories'));
});

//Роут для перехода на страницу авторизации
Route::view('/login', 'auth.login');
//Роут для осущетсвления атуентификации и авторизации
Route::post('/login','AuthController@login')->name('login');
//Роут для перехода на страницу регистрации
Route::view('/signup', 'auth.signup')->name('signup');
//Роут для осуществления регистрации
Route::post('/signup','AuthController@register');
//Это нужно переделать
// Route::post('/login/tryLogin','AuthController@tryAuth');
//
//Роут для выхода из личного кабента пользователя
Route::get('/logout','AuthController@logout');
Route::get('/adminpanel','AdminController@index')->middleware('checkAuth')->name('adminpanel');

//обновляем данные компонента комплекса
Route::post('/adminpanel/complex/{complex_id}/update','AdminController@updateComplex');

Route::post('adminpanel/caps/addNew','AdminController@addNewCapabilityHome');

Route::post('adminpanel/cap/delete/{cap_id}','AdminController@deleteCapability');

Route::post('adminpanel/cap/update/{cap_id}','AdminController@updateCap');

Route::post('adminpanel/caps/addNew-warDog','AdminController@addNewWar');

Route::get('/home-pets','MainController@renderHomePetPage');

Route::get('/pet-workers','MainController@renderPetWorkers');

Route::get('/gover-pets','MainController@renderGovermentPets');

Route::post('/send-mail','MailController@send');

