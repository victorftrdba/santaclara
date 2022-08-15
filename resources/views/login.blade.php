<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Laboratório Santa Sophia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main class="login">
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center ">
                            <div class="card mb-3  bg-white bg-opacity-75">

                                <div class="card-body">
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="{{ route('home') }}" class=" d-flex align-items-center w-auto">
                                            <img src="assets/img/logo.svg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="py-1">
                                        <p class="text-center small">favor entrar com seu usuário e senha</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('login.authenticate') }}"
                                        method="POST">
                                        @if ($errors->all())
                                            <x-alert :message="$errors->first()" :type="'danger'" />
                                        @elseif(session()->has('error'))
                                            <x-alert :message="session()->get('error')" :type="'danger'" />
                                        @endif
                                        @csrf
                                        <div class="col-12">
                                            <label for="userId" class="form-label">CPF</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="cpf" class="form-control" id="userID"
                                                    placeholder="CPF" value="{{ old('cpf') }}">
                                                <div class="invalid-feedback">Seu usuário é seu cpf</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Senha</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" placeholder="Senha " required>
                                            <div class="invalid-feedback">Favor inserir a senha correta</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Lembrar me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button href="" class="btn btn-orange w-100"
                                                type="submit">Entrar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Desenvolvido por <a href="https://www.empiredesign.com.br/" target="_blank">Empire
                                    Design</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
