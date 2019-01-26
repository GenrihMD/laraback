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
    $data = array(
        'slider' => array(

            array(
                'title' => 'We Are Creative Agency',
                'background' => 'green'
            ),
            array(
                'title' => 'We Are Progressive Agency',
                'background' => 'red'
            ),
            array(
                'title' => 'WE ARE YOULOOKFOR AGENCY',
                'background' => 'blue'
            ),
        )
    );
    return view('welcome', $data);
});

Route::get('/test', function () {
    return view('test');
});

