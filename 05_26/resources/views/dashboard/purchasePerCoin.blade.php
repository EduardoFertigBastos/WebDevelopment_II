@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h1>Compras de {{$purchases_list[0]->coin->name}}</h1>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <div class="col-10 col-sm-12 col-md-8 col-lg-8 mt-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"> Moeda </td>
                        <td scope="col"> Quantidade </td>
                        <td scope="col"> Preço </td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($purchases_list))
                        @foreach ($purchases_list as $purchase)
                        <tr>
                            <td> {{ $purchase->coin->name }} </td>
                            <td> {{ $purchase->amount }} </td>
                            <td> {{ $purchase->price }} </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>

        @include('templates.modalDelete', [
                    'title'  => 'REMOVER REGISTRO',
                    'text'   => 'Desejas realmente remover o registro #'
                ])

    </main>

</div>

@endsection()

