@extends('master.master')

@section('css')
    <link href="{{ asset('assets/venboxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.css') }}">
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Despesas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Despesas</a></li>
                    <li class="breadcrumb-item active">Listar</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card-body">
                <h5 class="card-title">Despesas</h5>

                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data de Despesa</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Data do Pagamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($expenses as $expense)
                            <tr>
                                <th scope="row"><a href="#">#{{ $expense->id }}</a></th>
                                <td>{{ \Carbon\Carbon::parse($expense->expense_date)->format('d/m/Y') }}</td>
                                <td>{{ $expense->type }}</td>
                                <td>R${{ $expense->total }}</td>
                                <td>{{ \Carbon\Carbon::parse($expense->payment_date)->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="fw-bold text-danger pt-5">Nenhuma despesa encontrada.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </section>

    </main>
@endsection
