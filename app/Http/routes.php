<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', 'ApiVkController@AuthVk');

Route::get('/page/register', function() {
    return view('auth/register');
});
Route::post('/ajax/register', 'UserController@register');

Route::get('/page/login', function() {
    return view('auth/login');
});
Route::post('/ajax/login', 'UserController@login');

Route::get('/page/forgot', function() {
    return view('forgot');
});

Route::get('/page/error', function() {
    return 'Помощь по регистрации';
});

Route::group(['middleware' => 'user_auth'], function () {
    Route::get('/panel', 'PanelController@index');
    Route::get('/panel/target', 'PanelController@TargetShow');
    
    Route::get('/panel/help', 'PanelController@HelpShow');
    Route::get('/panel/help/create', 'PanelController@HelpCreateShow');
    Route::get('/panel/help/opened', 'PanelController@HelpOpenedShow');
    Route::get('/panel/help/archive', 'PanelController@HelpArchiveShow');
    Route::get('/panel/help/show/{id}', 'TicketController@TicketShow');
    
    Route::get('/panel/settings', 'PanelController@SettingsShow');
    Route::get('/panel/task', 'PanelController@TasksShow');

    Route::post('/ajax/accounts/add', 'AccountController@add');
    Route::post('/ajax/accounts/delete', 'AccountController@delete');

    Route::post('/ajax/vkdatabase/getcity', 'VkDatabaseController@GetCity');

    Route::post('/ajax/target/add', 'TargetsController@AddTargets');
    Route::post('/ajax/target/delete', 'TargetsController@DeleteTargets');

    Route::post('/ajax/task/add', 'TasksController@AddTask');
    Route::post('/ajax/task/delete', 'TasksController@DeleteTask');

    Route::post('/ajax/ticket/add', 'TicketController@TicketAdd');
    Route::post('/ajax/ticket/response', 'TicketController@TicketResponse');

});
