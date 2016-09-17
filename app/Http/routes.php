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

Route::get('article/show', 'ArticleController@show');

Route::get('make-action', function () {
    return URL::asset('img/favicon.png');
});

Route::get('home', [
    'as'    => 'home',
    'uses'  => 'FrontController@home'
]);

Route::group(['prefix' => 'dashboard'], function () {
   Route::get('/products', function () {
       return Response::make('Products list');
   });
   Route::get('/categories', function () {
       return Response::make('All categories');
   });
});

Route::group(['domain' => '{subdomain}.homestead.app'], function () {
    Route::get('profile/{page}', function ($subdomain, $page) {
        var_dump($subdomain, $page);exit;
    });
});

Route::post('handle-form', [
    'as'    => 'upload',
    function() {
        return Redirect::route('home');
    }
]);

Route::get('/user/{first_name}/{last_name}', function ($first_name, $last_name) {

    $data = array(
        'full_name' => ucfirst($first_name) . ' ' . ucfirst($last_name)
    );

    return View::make('welcome', $data);
});

Route::get('login', function() {
    return Redirect::to('/');
});

Route::get('custom/response', function() {
    return Response::make('Hello World!', 200);
});

Route::get('markdown/response', function() {
    $response = array('item 1', 'item 2', 'item 3');
    return Response::json($response);
});

Route::get('download', function() {
    $filePath = storage_path('logs') . DIRECTORY_SEPARATOR . 'laravel.log';
    return Response::download($filePath);
});