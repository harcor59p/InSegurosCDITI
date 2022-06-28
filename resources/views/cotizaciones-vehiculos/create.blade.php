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
                <div class="col-sm-3">
                    <label>Seleccione el Cliente: </label>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
