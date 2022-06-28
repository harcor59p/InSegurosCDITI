<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - InSegurosCDITI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    {{-- <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
        .check{
            background-color: #4a38a7;
        }
        .login ,.remember, .forget, .Copy{
            font-weight: bold;
        }
        .loginbtn{
            font-weight: bold;
            background-color:#4a38a7;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
        .div-loginbtn{
            display: flex;
            justify-content: center;
        }
        .btnstl{
            display: flex;
            justify-content: center;
        }
        footer{
            background-color: #4a38a7;
        }


    </style> --}}
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="text-center col-md-9 col-lg-6 col-xl-5">
                    <img src="{{asset('logo.png')}}" class="img-fluid">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{Route('login')}}" method="POST">
                        @csrf
                        <div class="divider d-flex align-items-center mb-4 mt-4">
                            <p class="text-center mx-3 mb-0"></p>
                        </div>

                        <div class="text-center">
                            <h1 class="login p-0 m-0">Login</h1>
                        </div>

                        <div class="divider d-flex align-items-center mb-4 mt-4">
                            <p class="text-center mx-3 mb-0"></p>
                        </div>

                        @error('email') {{ $message }} @enderror
                        <!-- Email input -->
                        <div class="form-outline mb-3 pt-2">
                            <input type="email" required autofocus value="{{ old('email' )}}" id="user" name="email" class="form-control form-control-lg" placeholder="Usuario..."/>
                            <label class="form-label" for="form3Example3"></label>
                        </div>
                        @error('password') {{ $message }} @enderror
                        <!-- Password input -->
                        <div class="form-outline mb-0">
                            <input type="password" required id="password" name="password" class="form-control form-control-lg" placeholder="Contraseña..." />
                            <label class="form-label" for="form3Example4"></label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="check form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="remember form-check-label" for="form2Example3">
                                    <p>Recordar Usuario</p>
                                </label>
                            </div>
                            <a href="{{Route('passwordReset')}}" class="forget text-body-bold mb-3">Olvidó Su Contraseña?</a>
                        </div>

                        <div class="text-center text-lg-start mt-2 pt-2">
                            <div class="mb-2 btn div-loginbtn">
                                <button type="submit" onclick="saveUserName()" class="loginbtn text-white btn btn-lg btn-block">Login</button>
                            </div>
                            <div class="btnstl" >
                                <p class="small fw-bold mt-2 pt-0 mb-0" style="font-weight: bold;">¿No tienes una Cuenta?
                                <a href="{{Route('register')}}" class="text-body-bold" style="font-weight: bold;">Registrarse</a></p>
                            </div>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0"></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <footer class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between pb-4 pt-4 px-xl-5">
            <!-- Copyright -->
            <div class="Copy text-white m-0">
                <p style="margin-block-end: 0em;"> Copyright © In-Seguros CDITI 2022. All rights reserved. </p>
            </div>
            <!-- Copyright -->


        </footer>
    </section>
    <script>
        function saveUserName(){
            var userName = document.getElementById('user').value;
            localStorage.setItem('userName', userName);
            }
    </script>
</body>
</html>
