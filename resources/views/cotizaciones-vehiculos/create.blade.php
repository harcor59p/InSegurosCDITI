@extends('layouts.layout')

@section('titulo', 'Crear Cotización Seguro Todo Riesgos - Vehiculos')

@section('main')

<div class="container">
    <h2 class="title-cards">Datos de la nueva Cotización</h2>
    <br>
    <div class="col-xl-12">
        <form action="{{Route('vehiculos.create')}}" method="get">
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
                <div class="col-sm-3">
                    <select name="cliente_id" id="input" class="form-control">

                        <option value="">-- Seleccione un cliente --</option>
                        @foreach ( $clientecito as $cliente )

                        <option name="cliselect" value="{{$cliente['id']}}">{{$cliente['identificacion']}} - {{$cliente['nombre']}}</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-secondary" style="background-color: #4a38a7" value="Consultar">
                </div>
            </div>
        </form>
        @if($clisel)
        <br>
        <h2 class="title-cards">Datos consultados para su cotización</h2>
        <br>
        <form action="{{Route('vehiculos.store')}}" method="post">
            @csrf
            <input type="hidden" name="cliente_id" class="form-control" value="{{$clisel['id']}}">
            <input type="hidden" name="placa" class="form-control" value="{{$datosvehi_array['licensePlate']}}">
            <input type="hidden" name="Modelo" class="form-control" value="{{$datosvehi_array['vehicleMode']}}">
            <input type="hidden" name="serie" class="form-control" value="{{$datosvehi_array['serie']}}">
            <input type="hidden" name="cilindraje" class="form-control" value="{{$datosvehi_array['cylinderCapacity']}}">
            <input type="hidden" name="marca" class="form-control" value="{{$datosvehi_array['brand']}}">
            <input type="hidden" name="servicio" class="form-control" value="{{$datosvehi_array['services']}}">
            <input type="hidden" name="color" class="form-control" value="{{$datosvehi_array['color']}}">
            <input type="hidden" name="vr_serg_vehi" class="form-control" value="{{$datosvehi_array['riskAmount']}}">

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Identificación</th>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                  {{-- @foreach ( $clisel as $cli ) --}}
                  <tr>
                    <th>{{$clisel['id']}}</th>
                    <th>{{$clisel['identificacion']}}</th>
                    <th>{{$clisel['nombre']}}</th>
                    <th>{{$clisel['email']}}</th>
                    <th>{{$clisel['telefono']}}</th>
                    </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
              <br>
              <div class="col-xl-12">
                  <div class="form-row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                          <ul class="list-group">
                              <li class="list-group-item active" style="background-color: #4a38a7" name="placa">Placa: {{($datosvehi_array['licensePlate'])}}</li>
                              <li class="list-group-item" name="Modelo">Modelo: {{$datosvehi_array['vehicleMode']}}</li>
                              <li class="list-group-item" name="serie">Serie: {{$datosvehi_array['serie']}}</li>
                              <li class="list-group-item" name ="cilindraje">Cilindraje: {{$datosvehi_array['cylinderCapacity']}}</li>
                              <li class="list-group-item" name="marca">Marca: {{$datosvehi_array['brand']}}</li>
                              <li class="list-group-item" name="servicio">Servicio: {{$datosvehi_array['services']}}</li>
                              <li class="list-group-item" name="color">Color: {{$datosvehi_array['color']}}</li>
                              <li class="list-group-item"name="vr_serg_vehi">Valor del Seguro: {{$datosvehi_array['riskAmount']}}</li>
                          </ul>
                          <br>
                          <button class="btn btn-secondary btn-lg btn-block" style="background-color: #4a38a7" type="submit">Crear Cotización</button>
                      </div>
                      <div class="col-md-4">
                      </div>
                  </div>
              </div>
        </form>
        @endif
    </div>
</div>
<br><br><br><br><br>

@endsection
