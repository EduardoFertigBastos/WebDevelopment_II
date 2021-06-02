@extends('templates.master')

    @section('content')

        <main class="d-flex justify-content-between">
            @include('templates.aside')
            <div class="col-10 d-flex flex-column">
                <section id="sectionTable">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Moeda</th>
                                <th>Total</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($total_list))
                                @foreach ($total_list as $total)
                                    <tr>
                                        <td>{{$total->coin_id}}</td>
                                        <td>{{$total->coin_name}}</td>
                                        <td>R$ {{number_format($total->soma, 2, ',', '.')}}</td>
                                        <td>
                                            <a href="{{ route('dashboard.purchasesPerCoins', $total->coin_id) }}" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">Não há compras registradas.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </section>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><script src="./assets/js/script.js"></script></body>

    @endsection

    @section('javaScript')
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
@endsection
