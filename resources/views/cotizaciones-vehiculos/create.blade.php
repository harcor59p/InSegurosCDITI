@extends('layouts.layout')

@section('titulo', 'Crear Cotización Seguro Todo Riesgos - Vehiculos')

@section('main')

<div class="container">
    <h2 class="title-cards">Datos de la nueva Cotización</h2>
    <br><br>
    <div class="col-xl-12">
        <form action="" method="get">
            <div class="form-row">
                <div class="col-sm-2">
                    <label>Ingrese aqui su Placa: </label>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="licenseplate" placeholder="Placa" class="form-control" >
                </div>
                <div class="col-sm-2">
                    <label>Seleccione el Cliente: </label>
                </div>
                <div class="col-sm-4">
                    <select name="cliente_id" id="input" class="form-control">

                        <option value="">-- Seleccione un cliente --</option>
                        @foreach ( $clientecito as $cliente )

                        <option value="{{$cliente['id']}}">{{$cliente['identificacion']}} - {{$cliente['nombre']}}</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-secondary" style="background-color: #4a38a7" value="Consultar">
                </div>
            </div>
        </form>
        <br><br>


        <div class="card d-grid gap-2 col-10 mx-auto">
            <div class="card">
                <h5 class="card-title">{{$datosvehi_array['licensePlate']}}</h5>
            </div>
        </div>



        {{-- <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item active">{{($datos['licensePlate'])}}</li>
                <li class="list-group-item">{{json_decode($datos[1],TRUE)}}</li>
                <li class="list-group-item">{{json_decode($datos[2],TRUE)}}</li>
                <li class="list-group-item">{{json_decode($datos[3],TRUE)}}</li>
                <li class="list-group-item">{{json_decode($datos[4],TRUE)}}</li>
                <li class="list-group-item">{{json_decode($datos[5],TRUE)}}</li>
                 <li class="list-group-item">{{json_decode($datos[6],TRUE)}}</li>
                <li class="list-group-item">{{json_decode($datos[7],TRUE)}}</li>
            </ul>
        </div> --}}


    </div>
</div>


@endsection
