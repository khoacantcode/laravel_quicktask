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

Route::get('/', function () {
    return view('welcome');
});

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
