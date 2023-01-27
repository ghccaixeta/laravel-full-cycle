<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProjectNotesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::resource('client', ClientsController::class, ['except'=> ['create','edit']]);
Route::resource('project',ProjectsController::class, ['except'=> ['create','edit']]);
Route::resource('project/{id}/{noteId}',ProjectNotesController::class, ['except'=> ['create','edit']]);

// Route::get('/client', [ClientsController::class, 'index']);
// Route::post('/client', [ClientsController::class, 'store']);
// Route::get('/client/{id}', [ClientsController::class, 'show']);
// Route::put('/client/{id}', [ClientsController::class, 'update']);
// Route::delete('/client/{id}', [ClientsController::class, 'destroy']);

// Route::get('/project/{id}/note', [ProjectNotesController::class, 'index']);
// Route::put('/project/{id}/note', [ProjectNotesController::class, 'update']);
// Route::post('/project/{id}/note', [ProjectNotesController::class, 'store']);
// Route::get('/project/{id}/note/{noteId}', [ProjectNotesController::class, 'show']);
// Route::delete('/project/{id}/note/{noteId}', [ProjectNotesController::class, 'destroy']);

// Route::get('/project', [ProjectsController::class, 'index']);
// Route::post('/project', [ProjectsController::class, 'store']);
// Route::get('/project/{id}', [ProjectsController::class, 'show']);
// Route::put('/project/{id}', [ProjectsController::class, 'update']);
// Route::delete('/project/{id}', [ProjectsController::class, 'destroy']);