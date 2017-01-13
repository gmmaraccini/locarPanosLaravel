<?php

namespace App\Http\Controllers;

use App\CadastroDeCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreCadastroDeClientesRequest;
use App\Http\Requests\UpdateCadastroDeClientesRequest;

class CadastroDeClientesController extends Controller
{

    /**
     * Display a listing of CadastroDeCliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastro_de_clientes = CadastroDeCliente::all();

        return view('cadastro_de_clientes.index', compact('cadastro_de_clientes'));
    }

    /**
     * Show the form for creating new CadastroDeCliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_de_clientes.create');
    }

    /**
     * Store a newly created CadastroDeCliente in storage.
     *
     * @param  \App\Http\Requests\StoreCadastroDeClientesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCadastroDeClientesRequest $request)
    {
        $cadastro_de_cliente = CadastroDeCliente::create($request->all());

        return redirect()->route('cadastro_de_clientes.index');
    }


    /**
     * Show the form for editing CadastroDeCliente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro_de_cliente = CadastroDeCliente::findOrFail($id);

        return view('cadastro_de_clientes.edit', compact('cadastro_de_cliente'));
    }

    /**
     * Update CadastroDeCliente in storage.
     *
     * @param  \App\Http\Requests\UpdateCadastroDeClientesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCadastroDeClientesRequest $request, $id)
    {
        $cadastro_de_cliente = CadastroDeCliente::findOrFail($id);
        $cadastro_de_cliente->update($request->all());

        return redirect()->route('cadastro_de_clientes.index');
    }


    /**
     * Display CadastroDeCliente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastro_de_cliente = CadastroDeCliente::findOrFail($id);

        return view('cadastro_de_clientes.show', compact('cadastro_de_cliente'));
    }


    /**
     * Remove CadastroDeCliente from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastro_de_cliente = CadastroDeCliente::findOrFail($id);
        $cadastro_de_cliente->delete();

        return redirect()->route('cadastro_de_clientes.index');
    }

    /**
     * Delete all selected CadastroDeCliente at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = CadastroDeCliente::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
