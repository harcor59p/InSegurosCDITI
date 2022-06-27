<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InSegurosCDITI - @yield('titulo')</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('js/script.js')}}"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
</head>
<!--lateral izquierdo del menu opciones -->
<header>
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>
    <form method="post" action="{{Route('logout')}}" style="color: #FFFFFF;width: 100%;text-align: right;margin-right:100px;">
        @method('put')
        @csrf
        <span id="txt_user_name">Anónimo</span>
         <button type="submit" class="destroy_session">
            <div >
         <span style="margin: 15px;color: #ff564a;">
            <i class="fa-solid fa-power-off" title="cerrar session"></i>
         </button>
            </form>
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


            @if (auth()->user()->rol == 'Administrador')

            <a href="#" class="option">
                <div class="option">
                    <i class="fa-solid fa-users" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
                </a>

            @endif

            <a href="/clientes">
                <div class="option">
                    <i class="fa-solid fa-person" title="Clientes"></i>
                    <h4>Clientes</h4>
                </div>
                <span class="sr-only">(current)</span></a>


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
