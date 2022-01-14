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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/model', 'HomeController@getModel')->name('model');
Route::get('lang/{lang}', [
    'as' => 'lang.switch', 
    'uses' => '\App\Http\Controllers\LanguageController@switchLang'
]);

// ==================================== ADMIN ====================================
$prefix_admin = config('custom.url.prefix_admin'); //default: admin
Route::prefix($prefix_admin)->group(function () {
    // -------------------------------- DASHBOARD --------------------------------
    Route::get("/dashboard", [
        "as" => "DashboardController",
        "uses" => "Admin\DashboardController@index"
    ]);
});

Route::prefix("post")->middleware("auth")->group(function () {
    // -------------------------------- HOME --------------------------------
    Route::get('post_create', [
        "as" => "post_create_form",
        "uses" => "PostController@create"
    ]);
    Route::get('add', [
        "as" => "add_post",
        "uses" => "PostController@add"
    ]);
    Route::get('/{id}', [
        "as" => "watch_post",
        "uses" => "PostController@index"
    ]);
    Route::delete('delete/{id}', [
        "as" => "delete_post",
        "uses" => "PostController@delete"
    ]);
    Route::get('update_form/{id}', [
        "as" => "update_post_form",
        "uses" => "PostController@update_form"
    ]);
    Route::put('update/{id}', [
        "as" => "update_post",
        "uses" => "PostController@update"
    ]);
});
