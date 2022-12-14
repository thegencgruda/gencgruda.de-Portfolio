<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [HomepageController::class, 'index']);


Route::group(['prefix' => 'project'], function(){
    Route::get('{slug}', [ProjectController::class, 'show'])->name('project-detail');
});
