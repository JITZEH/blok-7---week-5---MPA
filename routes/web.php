<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/songs', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
Route::get('/song/{song}', [App\Http\Controllers\SongController::class, 'getIndividualSong'])->name('song');
Route::get('/playlist/{playlist}', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist');
Route::get('/playlists', [App\Http\Controllers\PlaylistController::class, 'show'])->name('playlists');
Route::get('/queue', [App\Http\Controllers\QueueController::class, 'index'])->name('queue');
Route::get('/createplaylist', [App\Http\Controllers\QueueController::class, 'createPlaylist'])->name('makePlaylist');
Route::get('/storeplaylist', [App\Http\Controllers\QueueController::class, 'storePlaylist'])->name('storePlaylist');
Route::get('/sessionqueue/{song}', [App\Http\Controllers\QueueController::class, 'push'])->name('showqueue');
Route::get('/clearqueue', [App\Http\Controllers\QueueController::class, 'clearQueue'])->name('clearqueue');
Route::get('/deletequeueitem/{key}', [App\Http\Controllers\QueueController::class, 'deleteQueueItem'])->name('deletequeueitem');
Route::get('/genre/{genre_id}', [App\Http\Controllers\GenreController::class, 'searchGenre'])->name('searchGenre');
Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre');



