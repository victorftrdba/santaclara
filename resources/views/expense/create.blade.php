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
                    <li class="breadcrumb-item"><a href="index.html">Despesas</a></li>
                    <li class="breadcrumb-item active">Incluir</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="container-lg py-5">
                <form action="{{ route('expenses.store') }}" class="row g-3" method="POST">
                    @csrf
                    @method('POST')
                    <div class="col-6">
                        <label for="dateDes" class="form-label">Data da Despesa</label>
                        <input type="date" name="expense_date" class="form-control" id="dateDes">
                    </div>
                    <div class="col-6">
                        <label for="despesa" class="form-label">Tipo de Despesa</label>
                        <select name="type" id="despesa" class="form-select">
                            <option selected="">Selecione...</option>
                            <option>Alimentação</option>
                            <option>Transporte</option>
                            <option>Material de Escritório</option>
                            <option>Vale/Pagamento</option>
                            <option>Manutenção/Benfeitoria</option>
                            <option>Combustível</option>

                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nameFor" class="form-label">Nome do Fornecedor</label>
                        <input type="text" name="provider_name" class="form-control" id="nameFor">
                    </div>

                    <div class="col-md-4">
                        <label for="codFor" class="form-label">Código</label>
                        <input type="number" name="code" class="form-control" id="codFor">
                    </div>

                    <div class="col-md-4">
                        <label for="valueFor" class="form-label">Valor Cobrado</label>
                        <input type="number" step=".01" name="value" class="form-control" id="valueFor">
                    </div>

                    <div class="col-md-4">
                        <label for="descFor" class="form-label">Desconto</label>
                        <input type="number" step=".01" name="discount" class="form-control" id="descFor">
                    </div>

                    <div class="col-md-4">
                        <label for="totalFor" class="form-label">Total</label>
                        <input type="number" step=".01" name="total" class="form-control" id="totalFor">
                    </div>

                    <div class="col-md-4">
                        <label for="nasc" class="form-label">Data do Pagamento</label>
                        <input type="date" name="payment_date" class="form-control" id="nasc">
                    </div>

                    <div class="col-md-4">
                        <label for="accountFont" class="form-label">Conta Fonte</label>
                        <input type="text" name="source_account" class="form-control" id="accountFont">
                    </div>

                    <div class="col-md-4 d-flex align-items-center justify-content-start">
                        <div class="p-2 my-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="source_account_type" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Fixa</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="source_account_type" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Variável</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="despesa" class="form-label">Unidade</label>
                        <select id="despesa" name="unity_id" class="form-select">
                            <option selected="">Selecione...</option>
                            @foreach ($unities as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="observations" placeholder="Observações" id="obsDesp"></textarea>
                            <label for="obsDesp">Observações</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">AVANÇAR</button>
                    </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@section('js')
    <script src="{{ asset('assets/js/bs-stepper.min.js') }}"></script>
    <script>
        /***Bs Stepper***/

        document.addEventListener('DOMContentLoaded', function() {
            var stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        var stepper = new Stepper(document.querySelector('.bs-stepper'));
    </script>
@endsection
