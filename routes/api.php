<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes', 'NoteController@all');
Route::get('/notes/{noteId}', 'NoteController@one');
Route::post('/notes', 'NoteController@store');
Route::put('/notes/{note}', 'NoteController@update');
Route::delete('/notes/{note}', 'NoteController@destroy');


// Route::middleware('cors')->get('/notes', 'NoteController@all');
// Route::middleware('cors')->get('/notes/{noteId}', 'NoteController@one');
// Route::middleware('cors')->post('/notes', 'NoteController@store');
// Route::middleware('cors')->put('/notes/{note}', 'NoteController@update');
// Route::middleware('cors')->delete('/notes/{note}', 'NoteController@destroy');
