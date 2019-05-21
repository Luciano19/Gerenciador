<?php

namespace App\Http\Controllers;

use App\Tarefa;
use App\Tipo_tarefa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        $tipo_tarefa = Tipo_tarefa::all();
        $users = User::all();
        return view('tarefa_listar', compact('tarefas', 'tipo_tarefa', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_tarefa = Tipo_tarefa::all();
        $users = User::all();
        return view('tarefa_cadastrar', compact('tipo_tarefa', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->users_id = $request->input("users_id");
        $tarefa->tipo_id = $request->input("tipo-tarefa");

        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tipo_tarefa = Tipo_tarefa::all();
        return view('tarefa_editar', compact('tarefa', 'tipo_tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->titulo = $request->input("titulo");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->users_id = $request->input("users_id");
        $tarefa->tipo_id = $request->input("tipo_id");
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
