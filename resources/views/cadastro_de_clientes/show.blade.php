@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.cadastro-de-clientes.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.nome')</th>
                            <td>{{ $cadastro_de_cliente->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.nome-fantasia')</th>
                            <td>{{ $cadastro_de_cliente->nome_fantasia }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.endereco')</th>
                            <td>{{ $cadastro_de_cliente->endereco }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.bairro')</th>
                            <td>{{ $cadastro_de_cliente->bairro }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.cep')</th>
                            <td>{{ $cadastro_de_cliente->cep }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.cnpj')</th>
                            <td>{{ $cadastro_de_cliente->cnpj }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.vcto-primeira-quinzena')</th>
                            <td>{{ $cadastro_de_cliente->vcto_primeira_quinzena }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.vcto-segunda-quinzena')</th>
                            <td>{{ $cadastro_de_cliente->vcto_segunda_quinzena }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.vcto-mensal')</th>
                            <td>{{ $cadastro_de_cliente->vcto_mensal }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.rota')</th>
                            <td>{{ $cadastro_de_cliente->rota }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.telefone')</th>
                            <td>{{ $cadastro_de_cliente->telefone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.contato')</th>
                            <td>{{ $cadastro_de_cliente->contato }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.cadastro-de-clientes.fields.email')</th>
                            <td>{{ $cadastro_de_cliente->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('cadastro_de_clientes.index') }}" class="btn btn-default">@lang('quickadmin.back_to_list')</a>
        </div>
    </div>
@stop