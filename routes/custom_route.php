<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 1/9/2019
 * Time: 11:17
 */
use Illuminate\Support\Facades\Route;


Route::get('name/{name?}', function ($name = 'Ha'){
    return 'Hi Nam '.$name;
})->name("get_name");

Route::get('user/{id?}/profile', function ($id=0){
    $url = route('get_name', ['name' => "Minh_Ha"]);
    return redirect()->route('get_name', ['name' => "Minh_Ha"]);
});

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function (){
    Route::get('routeGroup', function (){
        return "this is route group";
    });
});