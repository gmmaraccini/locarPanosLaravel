@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.cadastro-de-clientes.title')</h3>
    
    {!! Form::model($cadastro_de_cliente, ['method' => 'PUT', 'route' => ['cadastro_de_clientes.update', $cadastro_de_cliente->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', 'Nome Cliente', ['class' => 'control-label']) !!}
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome_fantasia', 'Nome fantasia', ['class' => 'control-label']) !!}
                    {!! Form::text('nome_fantasia', old('nome_fantasia'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome_fantasia'))
                        <p class="help-block">
                            {{ $errors->first('nome_fantasia') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endereco', 'Endereco', ['class' => 'control-label']) !!}
                    {!! Form::text('endereco', old('endereco'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endereco'))
                        <p class="help-block">
                            {{ $errors->first('endereco') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bairro', 'Bairro', ['class' => 'control-label']) !!}
                    {!! Form::text('bairro', old('bairro'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bairro'))
                        <p class="help-block">
                            {{ $errors->first('bairro') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cep', 'Cep', ['class' => 'control-label']) !!}
                    {!! Form::text('cep', old('cep'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cep'))
                        <p class="help-block">
                            {{ $errors->first('cep') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cnpj', 'Cnpj', ['class' => 'control-label']) !!}
                    {!! Form::text('cnpj', old('cnpj'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cnpj'))
                        <p class="help-block">
                            {{ $errors->first('cnpj') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vcto_primeira_quinzena', 'Vcto 1ª quinzena', ['class' => 'control-label']) !!}
                    {!! Form::text('vcto_primeira_quinzena', old('vcto_primeira_quinzena'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vcto_primeira_quinzena'))
                        <p class="help-block">
                            {{ $errors->first('vcto_primeira_quinzena') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vcto_segunda_quinzena', 'Vcto 2ª quinzena', ['class' => 'control-label']) !!}
                    {!! Form::text('vcto_segunda_quinzena', old('vcto_segunda_quinzena'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vcto_segunda_quinzena'))
                        <p class="help-block">
                            {{ $errors->first('vcto_segunda_quinzena') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vcto_mensal', 'Vcto mensal', ['class' => 'control-label']) !!}
                    {!! Form::text('vcto_mensal', old('vcto_mensal'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vcto_mensal'))
                        <p class="help-block">
                            {{ $errors->first('vcto_mensal') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rota', 'Rota', ['class' => 'control-label']) !!}
                    {!! Form::text('rota', old('rota'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rota'))
                        <p class="help-block">
                            {{ $errors->first('rota') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefone', 'Telefone', ['class' => 'control-label']) !!}
                    {!! Form::text('telefone', old('telefone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone'))
                        <p class="help-block">
                            {{ $errors->first('telefone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contato', 'Contato', ['class' => 'control-label']) !!}
                    {!! Form::text('contato', old('contato'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('contato'))
                        <p class="help-block">
                            {{ $errors->first('contato') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

