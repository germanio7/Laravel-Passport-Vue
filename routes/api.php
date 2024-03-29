<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->group(function () {

    /*Auth*/
    Route::get('/user', 'AuthController@user');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/update_user', 'AuthController@updateUser');

    Route::post('/delete_user', 'AuthController@deleteUser');

    /*Roles*/
    Route::apiResource('roles', 'API\RolesController', ['except' => ['create', 'edit']]);

    /*Users*/
    Route::apiResource('users', 'API\UsersController', ['except' => ['create', 'edit']]);
    Route::post('/update_foto', 'API\UsersController@updateFoto');
});


/*Auth*/
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
