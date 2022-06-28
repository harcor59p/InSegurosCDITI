@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro Todo Riesgos - Vehiculos')

@section('main')
<head>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
-->
</head>
<body>
    <div class="container">
        <hr>
        <h1 class="text-center">Cotiza tu Seguro de Vida ahora!</h1>
        
        <?php
            //Datos del Usuario recibidos del formulario
            $nomUsario = $_POST['nameUsuario'];
            $apeUsuario = $_POST['apellidos'];
            $age = $_POST['age'];
            $dependientes = $_POST['dependientes'];
            $trabajo = $_POST['trabajo'];
            $ingresos = $_POST['ingresos'];
            $salud = $_POST['salud'];

            $ingresoAnual = (int)$ingresos*5;

            //Porcentaje por Rango de Edad
            if($age <= 35){
                $edad = 120;
            }
            elseif($age >= 36 && $age <= 55){
                $edad = 160;
            }
            elseif($age > 55){
                $edad = 200;
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

            //Capital Asegurado * riesgo
            $porcentaje = $ingresoAnual * $trabajo / 100;
            $suma = $ingresoAnual + $porcentaje;
            //Capital Asegurado * riesgo * edad
            $porcentajeEdad = $suma * $edad / 100;
            //Capital Asegurado * riesgo * edad * salud
            $porcentajeSalud = $porcentajeEdad * (int)$salud / 100;
            $capitalAsegurado = $porcentajeEdad + $porcentajeSalud;

            //Cuotas mensules por 12 meses
            $cuotas = $capitalAsegurado * 0.15 / 100;
            //style="width: 40rem;" 
            //margin:10px auto;
		    //display:block;
        ?>    
        <div class="card d-grid gap-2 col-10 mx-auto">
            <img src="img/logoMenuRemov.png" class="card-img-top" alt="..." style="width:auto; margin:10px auto; display:block;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center" style="font-weight: bold;">Valor Estimado de $<?php echo number_format($capitalAsegurado); ?> Pesos!</li>
            </ul>
            <div class="card-body" style="padding: 1rem 1rem 0rem">
                <h5 class="card-title">Felicidades!</h5>
                <p class="card-text"><span>Hemos calculado el Seguro de vida perfecto para ti y tu familia con tan solo 12 cuotas de $<?php echo number_format($cuotas)?> por un año, asegurate y vive tranquilo. </span>
                </p>
                <p class="text-center" style="font-weight: bold;">Seguros que te Cuidan</p>
            </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Valor del Seguro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $nomUsario ?></td>
                    <td><?php echo $apeUsuario ?></td>
                    <td><?php echo $age ?></td>
                    <td>$<?php echo number_format($capitalAsegurado); ?></td>
                </tr>
            </tbody>
            </table>
            <!--<div class="card-body" style="text-align: center;">
                <a href="#" class="btn btn-primary" style="background-color: #4a38a7; border: #fff;">Ver más</a>
            </div>-->
        </div>
        <hr>
    </div>
</body>





@endsection