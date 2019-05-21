<?php

namespace App\Http\Controllers;

use App\Tipo_tarefa;
use App\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TipoTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($id){
        $tipo_tarefa = Tipo_tarefa::onlyTrashed()->find($id);
        $tipo_tarefa->forceDelete();
        return redirect()->route('tipotarefas.index');
    }
    public function index()
    {
        $tipo_tarefa = Tipo_tarefa::all();
        return view('tipo_tarefa_listar', compact('tipo_tarefa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_tarefa_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_tarefas = new Tipo_tarefa();
        $tipo_tarefas->nome = $request->input("nome");
        $tipo_tarefas->save();
        return redirect()->route('tipotarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_tarefa  $tipo_tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_tarefa $tipo_tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_tarefa  $tipo_tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_tarefa = Tipo_tarefa::findOrFail($id);

        return view('tipotarefa_editar', compact('tipo_tarefa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_tarefa  $tipo_tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo_tarefa = Tipo_tarefa::findOrFail($id);
        $tipo_tarefa->nome = $request->input("nome");
        $tipo_tarefa->save();
        return redirect()->route('tipotarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_tarefa  $tipo_tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_tarefa = Tipo_tarefa::findOrFail($id);
        $tipo_tarefa->delete();
        return redirect()->route('tipotarefas.index');
    }
}
