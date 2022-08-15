@extends('master.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.css') }}">
@endsection


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Diversos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Serviço</a></li>
                    <li class="breadcrumb-item active">Diversos</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="container-lg py-5">
                <div class="pagetitle">
                    <h1>Incluir Diverso</h1>
                </div>
                <form action="{{ route('several.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="dateDiver" class="form-label">Data</label>
                                <input type="date" name="date" class="form-control" id="dateDiver">
                            </div>

                            <div class="col-md-3">
                                <label for="hourDiver" class="form-label">Hora</label>
                                <input type="number" name="hour" class="form-control" id="hourDiver">
                            </div>

                            <div class="col-md-3">
                                <label for="qtDiver" class="form-label">Quantidade</label>
                                <input type="number" name="quantity" class="form-control" id="qtDiver">
                            </div>

                            <div class="col-md-3">
                                <label for="valDiver" class="form-label">Valor Cobrado</label>
                                <input type="number" step=".01" name="value" class="form-control" id="valDiver">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <p>Forma de pagamento</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio1"
                                    value="Dinheiro">
                                <label class="form-check-label" for="inlineRadio1">Dinheiro</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Pix">
                                <label class="form-check-label" for="inlineRadio2">Pix</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Depósito">
                                <label class="form-check-label" for="inlineRadio2">Depósito</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Cartão">
                                <label class="form-check-label" for="inlineRadio2">Cartão</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Boleto">
                                <label class="form-check-label" for="inlineRadio2">Boleto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Faturado">
                                <label class="form-check-label" for="inlineRadio2">Faturado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2"
                                    value="Dupla modalidade de pagamento">
                                <label class="form-check-label" for="inlineRadio2">Dupla modalidade de pagamento</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="whRece" class="form-label">Tipo</label>
                                <select id="whRece" name="type" class="form-select">
                                    <option selected="">Selecione...</option>
                                    <option>Xerox</option>
                                    <option>Aluguel</option>
                                    <option>Voucher</option>
                                    <option>Diversos</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="whRece" class="form-label">Quem recebeu</label>
                                <select id="whRece" name="who_receives" class="form-select">
                                    <option selected="">Selecione...</option>
                                    <option>Gerência</option>
                                    <option>Depósito</option>
                                    <option>Boy</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Observações" id="obsDesp"></textarea>
                                <label for="obsDesp">Observações</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LANÇAR</button>
                        </div>
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
