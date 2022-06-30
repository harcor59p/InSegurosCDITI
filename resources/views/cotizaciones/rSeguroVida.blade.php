@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro Todo Riesgos - Vehiculos')

@section('main')
<head>
    <?php
            //Datos del Usuario recibidos del formulario
            /*$identificacion = $_POST['identificacion'];
            $nomUsario = $_POST['nombres'];
            $apeUsuario = $_POST['apellidos'];
            $age = $_POST['edad']; */
            $dependientes = $_POST['dependientes'];
            $trabajo = $_POST['trabajo'];
            $ingresos = $_POST['ingresos'];
            $salud = $_POST['salud'];

            $ingresoAnual = (int)$ingresos*5;

            //Porcentaje por Rango de Edad
            if($dependientes == 1 OR $dependientes == 2){
                $dependientes = 120;
            }
            elseif($dependientes == 3 OR $dependientes == 5){
                $dependientes = 160;
            }
            elseif($dependientes == 5 OR $dependientes == +5){
                $dependientes = 200;
            }

            //Porcentaje por Riesgo en el Trabajo
            if($trabajo == "Dir"){
                $trabajo = 2.436;
            }
            elseif($trabajo == "RecHum"){
                $trabajo = 1.044;
            }
            elseif($trabajo == "Produc"){
                $trabajo = 4.350;
            }
            elseif($trabajo == "TcCm"){
                $trabajo = 1.044;
            }
            elseif($trabajo == "FnCon"){
                $trabajo = 1.044;
            }
            elseif($trabajo == "Vts"){
                $trabajo = 2.436;
            }
            else{
                $trabajo = 1;
            }
            
            //Porcentaje por Estado de Salud
            if($salud == 'Mal'){
                $salud = 50;
            }
            elseif($salud == 'Reg'){
                $salud = 30;
            }
            elseif($salud == 'Bue'){
                $salud = 20;
            }
            elseif($salud == 'Exc'){
                $salud = 10;
            }
            else{
                $salud = 1;
            }

            //Capital Asegurado * riesgo
            $porcentaje = $ingresoAnual * $trabajo / 100;
            $suma = $ingresoAnual + $porcentaje;
            //Capital Asegurado * riesgo * edad
            $porcentajeEdad = $suma * $dependientes / 100;
            //Capital Asegurado * riesgo * edad * salud
            $porcentajeSalud = $porcentajeEdad * (int)$salud / 100;
            $capitalAsegurado = $porcentajeEdad + $porcentajeSalud;

            //Cuotas mensules por 12 meses
            $cuotas = $capitalAsegurado * 0.15 / 100;
            //style="width: 40rem;" 
            //margin:10px auto;
		    //display:block;
    ?>    
</head>
<body>
    <div class="container">
            <div id="resultadoCotizacion" namespace="resultadoCotizacion">
                <div class="card d-grid gap-2 col-12 mx-auto mb-0" style="background-color: #e4e4e4; border: 2px solid #4a38a7;">
                    <h1 class="text-center">Cotiza tu Seguro de Vida ahora!</h1>

                    <img src="img/logoMenuRemov.png" class="card-img-top" alt="..." style="width:auto; height: auto; margin:10px auto; display:block;">
                    <ul class="list-group list-group-flush" >
                        <li class="list-group-item text-center" style="font-weight: bold; background-color: #e4e4e4;">Valor Estimado de $<?php echo number_format($capitalAsegurado); ?> Pesos!</li>
                    </ul>
                    <div class="card-body" style="padding: 1rem 1rem 0rem">
                        <h5 class="card-title" style="font-weight: bold;">Felicidades!</h5>
                        <p class="card-text"><span>Hemos calculado el Seguro de vida perfecto para ti y tu familia con tan solo 12 cuotas de $<?php echo number_format($cuotas)?> por un año, asegurate y vive tranquilo. </span>
                        </p>
                        <p class="text-center" style="font-weight: bold;">Seguros que te Cuidan</p>
                    </div>
                </div>
            </div>
        <form action="{{Route('mailSeguros')}}" method="POST">
            @csrf
            <div class="card-body pt-10" style="text-align: center; font-weight: bold;">
                <div class="input-group mb-3">
                    <label class="mb-0 mt-2 mr-1">Enviar cotizacion al correo electronico:</label>
                    <input type="email" class="form-control" name="email" placeholder="Correo..." style="border: 1px solid #4a38a7;" required>
                    <div class="input-group-append">
                        <button class="btn" type="submit" style="background-color: #4a38a7; border: #fff; font-weight: bold; color: #fff;">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        <!--<form action="{{Route('valorGuardado')}}" method="POST">
            @csrf
            <div class="card-body pt-0" style="text-align: center; font-weight: bold; align-self: center;">
                <div class="input-group mb-3">
                    <label class="mb-0 mt-2 mr-1">Guardar Cotizacion</label>
                    <input type="hidden" name="capitalAsegurado" id="capitalAsegurado" value="{{$capitalAsegurado}}">
                    <div class="input-group-append">
                        <button class="btn" type="submit" style="background-color: #4a38a7; border: #fff; font-weight: bold; color: #fff;">Guardar</button>
                    </div>
                </div>
            </div>
        </form> -->
    </div>
</body>


@endsection