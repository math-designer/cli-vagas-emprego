@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('msgFail'))
                    <div class="alert alert-danger">
                        {{ session('msgFail') }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar empresa</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'empresas.store', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('id', 'ID', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::number('id', old('id'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('nome', 'Nome', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('nome', old('nome'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cnpj', 'CNPJ', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('cnpj', old('cnpj'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('cidade', 'Cidade', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('cidade', old('cidade'), ['class' => 'form-control', 'min' => 1]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('estado', old('estado'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('regiao', 'Regiao', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('regiao', old('regiao'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('areaAtuacao', 'Area de Atuação', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('areaAtuacao', old('areaAtuacao'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefone', 'Telefone', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('telefone', old('telefone'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
