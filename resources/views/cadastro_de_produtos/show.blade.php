@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.cadastro-de-produto.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-produto.fields.nome-do-produto')</th>
                            <td>{{ $cadastro_de_produto->nome_do_produto }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-produto.fields.preco-padrao')</th>
                            <td>{{ $cadastro_de_produto->preco_padrao }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('cadastro_de_produtos.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop