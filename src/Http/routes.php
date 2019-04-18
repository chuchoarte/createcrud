<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 06/01/2018
 * Time: 12:40 AM
 */

//commands-artisan-to-create-modules
Route::get('artisan-commands', 'jespitia\createcrud\Http\Controllers\CreateCRUDController@index')->name('artisan-commands.index');
Route::post('artisan-commands', 'jespitia\createcrud\Http\Controllers\CreateCRUDController@create');
Route::put('artisan-commands', 'jespitia\createcrud\Http\Controllers\CreateCRUDController@store');