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
    return view('welcome');
});

Route::get('/movies', 'FilmesController@mostrarTodoOsFilmes');

Route::get('/categoria/exibir', 'CategoriaController@exibir'); 

Route::get('/categoria/adicionar', 'CategoriaController@novo'); //get para exibir o form
Route::post('/categoria/adicionar', 'CategoriaController@adicionar'); //post para receber as infos do form

Route::get('/categoria/editar/{id}', 'CategoriaController@editar');
Route::put('/categoria/editar/{id}', 'CategoriaController@receberAlteracoes');

Route::get('/categoria/excluir/{id}', 'CategoriaController@excluir');
Route::delete('/categoria/excluir/{id}', 'CategoriaController@excluirCategoria');

Route::get('/atores/exibir', 'AtoresController@exibir'); 
Route::get('/atores/add', 'AtoresController@novo');
Route::post('/atores/add', 'AtoresController@adicionar');

Route::get('/atores/atualizar/{id}', 'AtoresController@atualizar');
Route::put('/atores/atualizar/{id}', 'AtoresController@confirmarAtualizacao');

Route::get('/atores/excluir/{id}', 'AtoresController@excluir');
Route::delete('/atores/excluir/{id}', 'AtoresController@confirmarExclusao');


