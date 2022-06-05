<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NoteController;
use App\Http\Resources\NoteCollection;
use App\Http\Resources\NoteResource;
use App\Models\Note;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('notes',NoteController::class);
// Route::get('/notes', function() {
//     return NoteResource::collection(Note::all());
// });
// Route::get('/notes', function() {
//     return new NoteCollection(Note::all());
// });
// Route::get('/notes', [NoteController::class  ,'index']);