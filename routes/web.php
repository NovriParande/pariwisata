<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\admin;

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

route::get('/home', [home::class, 'home']);
route::get('/tourism', [home::class, 'tourism']);

Route::get('admin', [admin::class, 'index']);

Route::get('admin/objects', [admin::class, 'objects']);

Route::get('admin/add_objects', [admin::class, 'add_objects']);

route::post('admin/save_objects', [admin::class, 'save_objects']);

route::get('admin/{id}/edit_objects', [admin::class, 'edit_objects']);

route::post('admin/{id}/update_objects', [admin::class, 'update_objects']);

route::post('admin/{id}', [admin::class, 'delete_objects']);

