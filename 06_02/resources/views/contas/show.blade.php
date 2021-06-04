@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>Visualizando o Registro #{{ $conta->id }}</h2>
    </header>

    <main class="card-body row justify-content-center mt-3">

        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="instituition"> Devedor: </label>
                    <input type="text" class="form-control" id="instituition"
                        name="instituition" placeholder="Devedor..." value="{{$conta->instituition}}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="price"> Preço: </label>
                    <input type="number" class="form-control" id="price"
                        name="price" placeholder="Preço..." value="{{$conta->price}}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <div class="form-group col-sm-8 col-md-10 col-lg-8">

                    <label for="payment"> Data de Expiração: </label>
                    <input type="date" class="form-control" id="payment"
                        name="payment" placeholder="Data de Expiração..." value="{{$conta->payment}}" disabled>

                </div>

            </div>

            <div class="form-row justify-content-center">

                <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                    Voltar
                </a>

            </div>

        </section>

    </main>
</div>
@endsection()

