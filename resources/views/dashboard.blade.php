{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Pincipal  - InSegurosCDITI</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head> --}}
<!--lateral izquierdo del menu opciones -->
{{-- <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>
<body id="body">
    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <img src="/img/logoMenuRemov.png" alt="" width="40px" height="30px">
            <h4>InSegurosCDITI</h4><br>
            <div class="icon__menu_t" id="menu_t">
                <i class="fas fa-bars" id="menu_t"></i>
            </div>
        </div>

        <div class="options__menu">

            <a href="#" class="option">
                <div class="option">
                    <i class="fa-solid fa-users" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-address-book" title="Cotizar SOAT"></i>
                    <h4>Cotizar SOAT</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-hands-holding-circle" title="Cotizar Seguros De Vida Personas"></i>
                    <h4>Cotizar Seguros De Vida Personas</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-car-burst" title="Cotizar Seguros Vehiculo"></i>
                    <h4>Cotizar Seguros Vehiculo</h4>
                </div>
            </a>
        </div>

    </div> --}}
    <!--final del lateral -->

@extends('layouts.layout')

@section('titulo', 'Menú Pincipal')

@section('main')

@if (auth()->user()->rol == 'Administrador')
    <div class="container">
        <h2 class="title-cards">Indicadores</h2>
        <br>
        <div class="container-card">
            <div class="card">
                <div class="contenido-card">
                    <h3 class="card-title">No. Usuarios</h3>
                    <p class="card-text">
                        {{json_encode($cant_users,TRUE)}}
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="contenido-card">
                    <h3 class="card-title">No. Cotizaciones Vehiculos</h3>
                    <p class="card-text">Content</p>
                </div>
            </div>
            <div class="card">
                <div class="contenido-card">
                    <h3 class="card-title">No. Cotizaciones SOAT</h3>
                    <p class="card-text">Content</p>
                </div>
            </div>
            <div class="card">
                <div class="contenido-card">
                    <h3 class="card-title">No. Cotizaciones Seguro de vida Personal</h3>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>
    </div>
@endif
<br>
         <form class="form">
            <h2 class="form__title">Formulario</h2>
            <div class="form__container">
                <div class="form__group">
                    <input type="text" id="name" class="form__input" placeholder=" " >
                    <label for="name" class="form__label">nombre</label>
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" id="user" class="form__input" placeholder=" " >
                    <label for="user" class="form__label">usuario</label>
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" id="password" class="form__input" placeholder=" " >
                    <label for="password" class="form__label">contraseña</label>
                    <span class="form__line"></span>
                </div>
                <input type="submit" class="form__submit" value="entrar">
            </div>
         </form>

        <div class="title-cards">
            <h2>Nuestros servicios</h2>
        </div>
<div class="container-card">
<div class="card">
<figure>
    <img src="{{asset('/img/zeguros.jpg')}}">
</figure>
<div class="contenido-card">
    <h3>Que Beneficios tienen los seguros?</h3>
    <p>Encontraras un detallado listado de beneficios de asegurarte a ti a tu familia y a tus bienes.</p>
    <a href="#">Leer Màs</a>
</div>
</div>
<div class="card">
<figure>
    <img src="{{asset('/img/zeguros.jpg')}}">
</figure>
<div class="contenido-card">
    <h3>Como obtener los beneficios de mis seguros?</h3>
    <p>Tendrar en tus manos la información necesaria para poder disfrutar los beneficios de los seguros adquiridos en nuestra compañia.</p>
    <a href="#">Leer Màs</a>
</div>
</div>
<div class="card">
<figure>
    <img src="{{asset('/img/zeguros.jpg')}}">
</figure>
<div class="contenido-card">
    <h3>Que entidades nos regulan?</h3>
    <p>Aqui encontraras como funciona el sistema de seguros en colombia y q ue entidades lo regulan.</p>
    <a href="#">Leer Màs</a>
</div>
</div>
</div>
@endsection
<!--Fin   Tarjetas-->

    {{-- <script src="js/script.js"></script>
    {{-- <footer><h6>Copyright © In-Seguros CDITI 2022. All righte reserved.</h6></footer> --}}
{{-- </body>
</html> --}}

