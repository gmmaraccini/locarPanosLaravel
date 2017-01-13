<?php

namespace App\Http\Controllers;

use App\CadastroDeProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreCadastroDeProdutosRequest;
use App\Http\Requests\UpdateCadastroDeProdutosRequest;

class CadastroDeProdutosController extends Controller
{

    /**
     * Display a listing of CadastroDeProduto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastro_de_produtos = CadastroDeProduto::all();

        return view('cadastro_de_produtos.index', compact('cadastro_de_produtos'));
    }

    /**
     * Show the form for creating new CadastroDeProduto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_de_produtos.create');
    }

    /**
     * Store a newly created CadastroDeProduto in storage.
     *
     * @param  \App\Http\Requests\StoreCadastroDeProdutosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCadastroDeProdutosRequest $request)
    {
        $cadastro_de_produto = CadastroDeProduto::create($request->all());

        return redirect()->route('cadastro_de_produtos.index');
    }


    /**
     * Show the form for editing CadastroDeProduto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro_de_produto = CadastroDeProduto::findOrFail($id);

        return view('cadastro_de_produtos.edit', compact('cadastro_de_produto'));
    }

    /**
     * Update CadastroDeProduto in storage.
     *
     * @param  \App\Http\Requests\UpdateCadastroDeProdutosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCadastroDeProdutosRequest $request, $id)
    {
        $cadastro_de_produto = CadastroDeProduto::findOrFail($id);
        $cadastro_de_produto->update($request->all());

        return redirect()->route('cadastro_de_produtos.index');
    }


    /**
     * Display CadastroDeProduto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastro_de_produto = CadastroDeProduto::findOrFail($id);

        return view('cadastro_de_produtos.show', compact('cadastro_de_produto'));
    }


    /**
     * Remove CadastroDeProduto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastro_de_produto = CadastroDeProduto::findOrFail($id);
        $cadastro_de_produto->delete();

        return redirect()->route('cadastro_de_produtos.index');
    }

    /**
     * Delete all selected CadastroDeProduto at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = CadastroDeProduto::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
