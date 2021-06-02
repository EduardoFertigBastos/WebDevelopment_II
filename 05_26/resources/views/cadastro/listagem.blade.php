@extends("layout")

@section('titulo')
    aula
@stop

@section('conteudo')
    Listagem de Pessoas
    <hr>
    @foreach ($pessoas as $p)
        {{$p->nome}}<br>
    @endforeach
@stop