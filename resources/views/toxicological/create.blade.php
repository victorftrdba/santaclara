@extends('master.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bs-stepper.css') }}">
@endsection


@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Exame Toxicológico</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Serviço</a></li>
                    <li class="breadcrumb-item active">Exame Toxicológico</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <form action="{{ route('toxicological.store') }}" method="POST">
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
                <input type='text' hidden value='{{ auth()->user()->id }}' />
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#exam-doador">
                            <button type="button" class="step-trigger" role="tab" aria-controls="exam-doador"
                                id="exam-doador-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Doador</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#exam-finalidade">
                            <button type="button" class="step-trigger" role="tab" aria-controls="exam-finalidade"
                                id="exam-finalidade-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Finalidade</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#exam-pay">
                            <button type="button" class="step-trigger" role="tab" aria-controls="exam-pay"
                                id="exam-pay-trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Pagamento</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <div id="exam-doador" class="content" role="tabpanel" aria-labelledby="exam-doador-trigger">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="dateEx" class="form-label">Data de Exame</label>
                                    <input type="date" name="date_exam" class="form-control" id="dateEx">
                                </div>
                                <div class="col-md-3">
                                    <label for="codEx" class="form-label">Código do Exame</label>
                                    <input type="number" name="cod_exam" class="form-control" id="codEx">
                                </div>
                                <div class="col-md-3">
                                    <label for="hourEx" class="form-label">Hora do Exame</label>
                                    <input type="time" name="time_exam" class="form-control" id="hourEx">
                                </div>

                                <div class="col-md-3">
                                    <label for="indiFor" class="form-label">Indicado por:</label>
                                    <select id="seindiForxo" name="indicated_by" class="form-select">
                                        <option selected value="">Selecione...</option>
                                        <option>Ronaldo / Auto Escola Jp</option>
                                        <option>Pedro / Droganor</option>
                                    </select>
                                </div>



                                <div class="col-md-4">
                                    <label for="name" class="form-label">Nome do Cliente</label>
                                    <input type="text" name="client_name" class="form-control" id="name">
                                </div>

                                <div class="col-md-4">
                                    <label for="cpf" class="form-label">CPF</label>
                                    <input type="number" name="cpf" class="form-control" id="cpf">
                                </div>

                                <div class="col-md-4">
                                    <label for="nasc" class="form-label">Data de Nascimento</label>
                                    <input type="date" name="birth_date" class="form-control" id="nasc">
                                </div>

                                <div class="col-md-6 row g-3">
                                    <div class="col">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <select id="sexo" name="gender" class="form-select">
                                            <option selected>Selecione...</option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                            <option>Não Binário</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="mail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="mail">
                                    </div>
                                </div>
                                <div class="col-md-6 row g-3">
                                    <div class="col">
                                        <label for="cel" class="form-label">Celular</label>
                                        <input type="tel" name="cell" class="form-control" id="cel">
                                    </div>
                                    <div class="col d-flex align-items-end">
                                        <div class="form-check ">
                                            <input class="form-check-input" name="not_cell" type="checkbox"
                                                id="gridCheck">
                                            <label class="form-check-label fw-bolder" for="gridCheck">
                                                Não possui celular
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-3">
                                    <label for="cep" class="form-label">Cep</label>
                                    <input type="number" name="zipcode" class="form-control" id="cep">
                                </div>
                                <div class="col-5">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" name="address" class="form-control" id="address">
                                </div>
                                <div class="col-md-4">
                                    <label for="complement" class="form-label">Complemento</label>
                                    <input type="text" name="complement" class="form-control" id="complement">
                                </div>

                                <div class="col-md-6 row g-3">
                                    <div class="col">
                                        <label for="number" class="form-label">Número</label>
                                        <input type="number" name="number" class="form-control" id="number">
                                    </div>
                                    <div class="col">
                                        <label for="district" class="form-label">Bairro</label>
                                        <input type="text" name="district" class="form-control" id="district">
                                    </div>
                                </div>

                                <div class="col-md-6 row g-3">
                                    <div class="col">
                                        <label for="state" class="form-label">Estado</label>
                                        <select id="state" name="state" class="form-select">
                                            <option selected>Selecione...</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                            <option value="EX">Estrangeiro</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="city" class="form-label">Cidade</label>
                                        <select id="city" name="city" class="form-select">
                                            <option selected>Selecione...</option>
                                            <option>Escolha a cidade </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="unit" class="form-label">Unidade</label>
                                    <select id="unit" name="unity_id" class="form-select">
                                        <option selected>Selecione...</option>
                                        @foreach ($unities as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="lab" class="form-label">Laboratório</label>
                                    <select id="lab" name="laboratory" class="form-select">
                                        <option selected>Selecione...</option>
                                        <option>CAEP</option>
                                        <option>LABET</option>
                                        <option>DB</option>
                                        <option>SODRÉ</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="attendant" class="form-label">Nome da Atendente </label>
                                    <input type="text" class="form-control" id="attendant">
                                </div>

                                <div class="col-4 d-inline-flex align-items-center justify-content-center ">
                                    <div class="col mb-3">
                                        <p>Faz uso de alguma substância psicoativa?</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="uses_psychoactive_substances" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Sim </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="uses_psychoactive_substances" id="inlineRadio2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">Não</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Avançar</button>
                            </div>
                        </div>
                        <div id="exam-finalidade" class="content" role="tabpanel"
                            aria-labelledby="exam-finalidade-trigger">
                            <div class="row p-3">
                                <div class="col p-3">
                                    <p>O condutor possui vale-exame?</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="examVoucher"
                                            id="examVoucher" value="1">
                                        <label class="form-check-label" for="examVoucher">Sim </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="examVoucher"
                                            id="examVoucher" value="0">
                                        <label class="form-check-label" for="examVoucher">Não</label>
                                    </div>
                                </div>

                                <p>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="bi bi-patch-exclamation-fill"></i>
                                        CLT
                                    </a>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2"
                                        role="button" aria-expanded="false" aria-controls="collapseExample2">
                                        <i class="bi bi-patch-exclamation-fill"></i>
                                        CNH
                                    </a>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3"
                                        role="button" aria-expanded="false" aria-controls="collapseExample3">
                                        <i class="bi bi-patch-exclamation-fill"></i>
                                        CLT + CNH
                                    </a>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4"
                                        role="button" aria-expanded="false" aria-controls="collapseExample4">
                                        <i class="bi bi-patch-exclamation-fill"></i>
                                        CONCURSO
                                    </a>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5"
                                        role="button" aria-expanded="false" aria-controls="collapseExample5">
                                        <i class="bi bi-patch-exclamation-fill"></i>
                                        Outro
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Admissão </label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Demissão</label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Mudança de
                                                    Função</label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option4">
                                                <label class="form-check-label" for="inlineRadio">Periódico</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body">
                                        <div class="row">
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Periódico </label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Renovação</label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Mudança de
                                                    categoria</label>
                                            </div>
                                            <div class="col form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="examVoucherOption"
                                                    id="inlineRadio2" value="option4">
                                                <label class="form-check-label" for="inlineRadio">Primeira
                                                    Habilitação</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body">
                                        Aqui vai CLT + CNH
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExample4">
                                    <div class="card card-body">
                                        Aqui vai CONCURSO
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExample5">
                                    <div class="card card-body">
                                        Aqui vai Outro
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary"
                                    onclick="stepper.previous()">Voltar</button>
                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Avançar</button>
                            </div>

                        </div>
                        <div id="exam-pay" class="content" role="tabpanel" aria-labelledby="exam-pay-trigger">
                            <div class="row">
                                <div class="col-4">
                                    <h3>Valor do Exame</h3>
                                    <p>
                                        R$ 55,00
                                    </p>
                                </div>
                                <div class="col-4">
                                    <h3>Valor da Coleta</h3>
                                    <p>
                                        R$ 132,00
                                    </p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Alterar valor da coleta
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h3>Valor Total**</h3>
                                    <p>
                                        R$ 187,00
                                    </p>
                                </div>
                                <p class="text-muted">**valor máximo R$187,00</p>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary"
                                    onclick="stepper.previous()">Voltar</button>
                                <button type="submit" class="btn btn-primary">ENVIAR</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </section>

    </main><!-- End #main -->
@endsection

@section('js')
    <script src="{{ asset('assets/js/bs-stepper.min.js') }}"></script>
    <script>
        const options = document.querySelectorAll("#state option");
        let text = "";

        options.forEach(elem => {
            text += elem.value + ",";
        })
        console.log(text)
        /***Bs Stepper***/

        document.addEventListener('DOMContentLoaded', function() {
            var stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        var stepper = new Stepper(document.querySelector('.bs-stepper'));
    </script>
@endsection
