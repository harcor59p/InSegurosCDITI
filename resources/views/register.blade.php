
{{-- <div>
    <div>
        <h1>REGISTRARSE</h1>
    </div>
    <div class="row">
        <div class="column">
            <form action="/register" method="POST">
                @csrf
                <div>
                <label for="name">Nombre</label>
                <input type="text" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                <input type="email" name="email">
                </div>
                <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                </div>
                <div>
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation">
                </div>
                <div class="boton">
                    <input type="submit" value="registrarse">
                </div>

            </form>
        </div>
    </div>
    </div> --}}


    {{-- register --}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css" type="text/ccs" media="screen">
    <style>
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


    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="text-center col-md-9 col-lg-6 col-xl-5">
                    <img src="{{asset('logo.png')}}" class="img-fluid">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{Route('register')}}" method="POST">
                        @csrf
                        <div class="divider d-flex align-items-center mb-4 mt-4">
                            <p class="text-center mx-3 mb-0"></p>
                        </div>

                        <div class="text-center">
                            <h1 class="login p-0 m-0">Registrarse</h1>
                        </div>

                        <div class="divider d-flex align-items-center mb-4 mt-4">
                            <p class="text-center mx-3 mb-0"></p>
                        </div>

                        <!-- Nombre input -->
                        <div class="form-outline mb-0 pt-2">
                            <input type="text" id="nombre" name="name" class="form-control form-control-lg" placeholder="Nombre..." required/>
                            <label class="form-label" for="nombre"></label>
                        </div>
                        {{-- email input --}}
                        <div class="form-outline mb-0 pt-2">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email..." required/>
                            <label class="form-label" for="email"></label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-0 pt-2">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Contraseña..." required/>
                            <label class="form-label" for="password"></label>
                        </div>
                        {{-- verificar contraseña --}}
                        <div class="form-outline mb-0 pt-2">
                            <input type="password" id="password_verify" name="password_verify" class="form-control form-control-lg" placeholder="Confirmar Contraseña..." required/>
                            <label class="form-label" for="password_verify"></label>
                        </div>


                        {{-- boton registrarse --}}
                        <div class="text-center text-lg-start m-0 p-0">
                            <div class="mb-2 btn div-loginbtn">
                                <button type="submit" class="loginbtn text-white btn btn-lg btn-block">Registrarse</button>
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
</body>
</html>
