<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InSegurosCDITI - @yield('titulo')</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<header>
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>
</header>
<body id="body">
<div class="menu__side" id="menu_side">

    <div class="name__page">
        <img src="{{asset('img/logoMenuRemov.png')}}" alt="" width="40px" height="30px">
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

</div>
<br>
@yield('main')

<script src="{{asset('js/script.js')}}"></script>
<footer><h6>Copyright © In-Seguros CDITI 2022. All righte reserved.</h6></footer>

</body>
</html>
