<?php



/*
 *
 * Basis routes
 *
 */

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('dashboardhome', 'DashboardHomeController@index');
//Route::get('/jtable', 'jtableController@index');
//Route::get('/jtable/data', 'jtableController@data');

Route::pattern('id', '[0-9]+');
Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController', ]);

/*
 *
 * Route naar de jaldoelen van een leerplan
 *
 */
Route::get('jaldoelen/{id}', 'JalDoelenController@index');
Route::get('jaldoelen/data/{id}', 'JaldoelenController@data');

Route::get('jaldoelen/{lp}/edit', 'JaldoelenController@getEdit');
Route::post('jaldoelen/{lp}/edit', 'JaldoelenController@postEdit');

/*
 *
 * Administratieve routes
 *
 * */

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::pattern('id', '[0-9]+');
    Route::pattern('id2', '[0-9]+');

    # Admin Dashboad
    Route::get('dashboard', 'DashboardController@index');

   /*
    *
    * Leerplannen - Tonen - CRUD - Inlezen data
    *
    */

    Route::get('leerplan/', 'LeerplanController@index');

    Route::get('leerplan/create', 'LeerplanController@getCreate');
    Route::post('leerplan/create', 'LeerplanController@postCreate');
    Route::get('leerplan/{id}/edit', 'LeerplanController@getEdit');
    Route::post('leerplan/{id}/edit', 'LeerplanController@postEdit');
    Route::get('leerplan/{id}/delete', 'LeerplanController@getDelete');
    Route::post('leerplan/{id}/delete', 'LeerplanController@postDelete');

    Route::get('leerplan/data', 'LeerplanController@data');

   /*
    *
    * Doelen - Tonen - CRUD - Inlezen data
    *
    */

    Route::get('doelen/', 'DoelenController@index');
    Route::get('doelen/{id}/doelitems', 'DoelenController@doelitems');
    Route::get('doelen/create/{id}', 'DoelenController@getCreate');
    Route::post('doelen/create', 'DoelenController@postCreate');

    Route::get('doelen/{id}/edit', 'DoelenController@getEdit');
    Route::post('doelen/{id}/edit', 'DoelenController@postEdit');

    Route::get('doelen/{id}/delete', 'DoelenController@getDelete');
    Route::post('doelen/{id}/delete', 'DoelenController@postDelete');

    Route::get('doelen/data/{id}', 'DoelenController@data');

    /*
    *
    * Gebruikers - Tonen - CRUD - Inlezen data
    *
    */

    Route::get('users/', 'UserController@index');

    Route::get('users/create', 'UserController@getCreate');
    Route::post('users/create', 'UserController@postCreate');
    Route::get('users/{id}/edit', 'UserController@getEdit');
    Route::post('users/{id}/edit', 'UserController@postEdit');
    Route::get('users/{id}/delete', 'UserController@getDelete');
    Route::post('users/{id}/delete', 'UserController@postDelete');

    Route::get('users/data', 'UserController@data');

});
