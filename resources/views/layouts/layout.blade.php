<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InSegurosCDITI - @yield('titulo')</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<!--lateral izquierdo del menu opciones -->
<header>
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>
    <div style="color: #FFFFFF;width: 100%;text-align: right;margin-right:100px;">
        <span id="txt_user_name">Anónimo</span>
         <a href="">
            <div class="destroy_session">
         <span style="margin: 15px;color: #ff564a;">
            <i class="fa-solid fa-power-off" title="cerrar session"></i>
         </a>
        </div>
        </div>
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

    </div>
<br>
@yield('main')

<script src="{{asset('js/script.js')}}"></script>
<footer><h6>Copyright © In-Seguros CDITI 2022. All righte reserved.</h6></footer>

    @if(Auth::check())
    <script>
        var userName = "{{ Auth::user()->name }}";
        var txt_user_name = document.getElementById("txt_user_name");

        txt_user_name.innerHTML = "" + userName;
    </script>
    @endif

</body>
</html>
