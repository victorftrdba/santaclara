@extends('master.master')

@section('css')
    <link href="{{ asset('assets/venboxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.css') }}">
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Exames Toxicológicos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Exames Toxicológicos</a></li>
                    <li class="breadcrumb-item active">Listar</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card-body">
                <h5 class="card-title">Exames Toxicológicos</h5>

                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Data do Exame</th>
                            <th scope="col">Nome do Cliente</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Usa Substâncias Psicoativas</th>
                            <th scope="col">Possui Vale-Exame</th>
                            <th scope="col">Unidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($toxicologicals as $toxicological)
                            <tr>
                                <th scope="row"><a href="#">#{{ $toxicological->id }}</a></th>
                                <td>{{ \Carbon\Carbon::parse($toxicological->date_exam)->format('d/m/Y') }}</td>
                                <td>{{ $toxicological->client_name }}</td>
                                <td>{{ $toxicological->gender }}</td>
                                <td>{{ $toxicological->cell }}</td>
                                <td>{{ $toxicological->uses_psychoactive_substances ? 'Sim' : 'Não' }}</td>
                                <td>{{ $toxicological->examVoucher ? 'Sim' : 'Não' }}</td>
                                <td>{{ $toxicological->unity->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="fw-bold text-danger pt-5">Nenhum exame toxicológico encontrado.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </section>

    </main>
@endsection
