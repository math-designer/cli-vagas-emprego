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
                    <div class="panel-heading">Adicionar vaga</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'vagas.store', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            {!! Form::label('empresa', 'Empresa', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::select('empresa', $empresas, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('descricao', 'Descrição da vaga', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::text('descricao', old('descricao'), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('quantidade', 'Quanidade de vagas', ['class' => 'col-md-4 control-label']) !!}

                            <div class="col-md-6">
                                {!! Form::number('quantidade', old('quantidade'), ['class' => 'form-control', 'min' => 1]) !!}
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
