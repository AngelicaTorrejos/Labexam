<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/labexam',['uses' => 'TeacherController@view']); //get all users

$router->get('/su/{id}', 'TeacherController@search'); // get user by id

$router->post('/insert', 'TeacherController@i'); // create new user record

$router->put('/update/{id}', 'TeacherController@u'); // update user record

$router->delete('/delete/{id}', 'TeacherController@d'); // delete record