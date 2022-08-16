@extends('master.master')

@section('css')
    <link href="{{ asset('assets/venboxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.css') }}">
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Diversos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Diversos</a></li>
                    <li class="breadcrumb-item active">Listar</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card-body">
                <h5 class="card-title">Diversos</h5>

                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Data do Pagamento</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Tipo de Pagamento</th>
                            <th scope="col">Quem Recebeu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($severals as $several)
                            <tr>
                                <th scope="row"><a href="#">#{{ $several->id }}</a></th>
                                <td>{{ \Carbon\Carbon::parse($several->date)->format('d/m/Y') }}</td>
                                <td>{{ $several->type }}</td>
                                <td>R${{ $several->value }}</td>
                                <td>{{ \Carbon\Carbon::parse($several->payment_date)->format('d/m/Y') }}</td>
                                <td>{{ $several->hour }}</td>
                                <td>{{ $several->payment_method }}</td>
                                <td>{{ $several->who_receives }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="fw-bold text-danger pt-5">Nenhum diversos encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </section>

    </main>
@endsection
