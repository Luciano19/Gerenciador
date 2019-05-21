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
    return view('auth.register');
});

Auth::routes();

Route::get('/menu', 'HomeController@index')->name('menu');
Route::get('/tarefas', "TarefaController@index")->name('tarefas.index');
Route::get('/tarefa/editar/{id}', "TarefaController@edit")->name('tarefa.edit');
Route::put('/tarefa/atualizar/{id}', "TarefaController@update")->name('tarefas.update');
Route::get('/tarefa/cadastro', "TarefaController@create")->name('tarefas.create');
Route::post('/tarefa', "TarefaController@store")->name('tarefas.store');
Route::delete('/tarefas/shiftdelete/{id}',  'TarefaController@destroy')->name('tarefa.destroy');
Route::get('/tipo_tarefas', "TipotarefaController@index")->name('tipotarefas.index');
Route::get('/tipo_tarefa/editar/{id}', "TipotarefaController@edit")->name('tipotarefa.edit');
Route::put('/tipo_tarefa/atualizar/{id}', "TipotarefaController@update")->name('tipotarefa.update');
Route::get('/tipo_tarefa/cadastro', "TipotarefaController@create")->name('tipotarefas.create');
Route::post('/tipo_tarefa', "TipotarefaController@store")->name('tipotarefas.store');
Route::delete('/tipo_tarefas/delete/{id}',  'TipotarefaController@destroy')->name('tipotarefa.destroy');
Route::resource('Tipo_tarefas', 'Tipo_tarefaController');
Route::get('/usuario', "UsuarioController@index")->name('usuario.index');