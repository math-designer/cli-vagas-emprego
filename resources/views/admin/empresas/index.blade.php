@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (session('msgCreate'))
                    <div class="alert alert-success">
                        {{ session('msgCreate') }}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('empresas.create')}}" class="btn btn-primary right">
                            Adicionar
                        </a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Regiao</th>
                                <th>Area Atuação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($empresas as $e)
                                <tr>
                                    <td>{{$e->nome}}</td>
                                    <td>{{$e->regiao}}</td>
                                    <td>{{$e->areaAtuacao}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {{$empresas->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
