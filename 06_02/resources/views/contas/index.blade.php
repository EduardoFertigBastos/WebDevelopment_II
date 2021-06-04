@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h1>Contas</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Código </td>
                        <td scope="col"> Devedor </td>
                        <td scope="col"> Preço </td>
                        <td scope="col"> Data de Expiração </td>
                        <td scope="col"> Menu </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($contas_list))
                        @foreach ($contas_list as $conta)
                        <tr>
                            <th scope="row"> #{{ $conta->id }} </td>
                            <td> {{ $conta->instituition }} </td>
                            <td> {{ $conta->price }} </td>
                            <td> {{ $conta->payment }} </td>
                            <td>
                                <a href="{{ route('contas.edit', $conta->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#modalDelete" onclick="addRemoveButton('contas.delete', {{ $conta->id }})"
                                        class="btn btn-danger" data-toggle="modal" data-target="#modalDelete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                                <a href="{{ route('contas.show', $conta->id) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="form-row justify-content-center">
                <a href="{{route('contas.create')}}" class="col-6 btn btn-primary"> Cadastrar </a>
            </div>
        </div>


        @include('templates.modalDelete', [
                    'title'  => 'REMOVER REGISTRO',
                    'text'   => 'Desejas realmente remover o registro #'
                ])
    </main>
</div>

@endsection()

