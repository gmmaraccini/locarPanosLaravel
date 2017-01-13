@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.cadastro-de-clientes.title')</h3>
    
    <p>
        <a href="{{ route('cadastro_de_clientes.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($cadastro_de_clientes) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>@lang('quickadmin.cadastro-de-clientes.fields.nome-fantasia')</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($cadastro_de_clientes) > 0)
                        @foreach ($cadastro_de_clientes as $cadastro_de_cliente)
                            <tr data-entry-id="{{ $cadastro_de_cliente->id }}">
                                <td></td>
                                
                                <td>{{ $cadastro_de_cliente->nome_fantasia }}</td>
                                
                                <td>
                                    <a href="{{ route('cadastro_de_clientes.show',[$cadastro_de_cliente->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('cadastro_de_clientes.edit',[$cadastro_de_cliente->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['cadastro_de_clientes.destroy', $cadastro_de_cliente->id])) !!}
                                    {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="15">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('cadastro_de_clientes.mass_destroy') }}';
    </script>
@endsection