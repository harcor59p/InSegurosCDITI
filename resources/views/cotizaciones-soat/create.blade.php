@extends('layouts.layout')

@section('titulo', 'Crear Cotización Seguro Todo Riesgos - SOAT')

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
        
        
        <div class="col-md-6">
            <ul class="list-group"></ul>
            <li class="list-group-item active">{{$soat['licensePlate']}}</li>
            <li class="list-group-item">{{$soat['vehicleModel']}}</li>
            <li class="list-group-item">{{$soat['serie']}}</li>
            <li class="list-group-item">{{$soat['cylinderCapacity']}}</li>
            <li class="list-group-item">{{$soat['brand']}}</li>
            <li class="list-group-item">{{$soat['service']}}</li>
            <li class="list-group-item">{{$soat['color']}}</li>
            <li class="list-group-item">{{$soat['SOATamount']}}</li>
        </div>

        
    </div>
</div>


@endsection
