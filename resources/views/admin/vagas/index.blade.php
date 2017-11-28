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
                        <a href="{{route('vagas.create')}}" class="btn btn-primary right">
                            Adicionar
                        </a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Descrição</th>
                                <th>Quantidade vagas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vagas as $v)
                                <tr>
                                    <td>{{$v->empresa}}</td>
                                    <td>{{$v->descricao}}</td>
                                    <td>{{$v->quantidade}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {{$vagas->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
