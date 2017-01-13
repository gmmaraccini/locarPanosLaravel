<?php
Route::get('/', function () {
    return redirect('/home');
});

Route::auth();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

        Route::resource('user_managements', 'UserManagementsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('cadastro_de_clientes', 'CadastroDeClientesController');
    Route::post('cadastro_de_clientes_mass_destroy', ['uses' => 'CadastroDeClientesController@massDestroy', 'as' => 'cadastro_de_clientes.mass_destroy']);
    Route::resource('cadastro_de_produtos', 'CadastroDeProdutosController');
    Route::post('cadastro_de_produtos_mass_destroy', ['uses' => 'CadastroDeProdutosController@massDestroy', 'as' => 'cadastro_de_produtos.mass_destroy']);

});

    Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});
