@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.cadastro-de-produto.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['cadastro_de_produtos.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome_do_produto', 'Nome do produto', ['class' => 'control-label']) !!}
                    {!! Form::text('nome_do_produto', old('nome_do_produto'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome_do_produto'))
                        <p class="help-block">
                            {{ $errors->first('nome_do_produto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('preco_padrao', 'Preco padrão', ['class' => 'control-label']) !!}
                    {!! Form::text('preco_padrao', old('preco_padrao'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('preco_padrao'))
                        <p class="help-block">
                            {{ $errors->first('preco_padrao') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

