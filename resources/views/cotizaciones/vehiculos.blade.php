@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro Todo Riesgos Vehiculos')

@section('main')

<div class="mb-3">

    <form action="{{ route('soat') }}" method="get">
        @csrf

        <label for="exampleFormControlInput1" class="form-label">Ingrese la placa</label>
        <input type="text" class="form-control" name="placa" id="exampleFormControlInput1" placeholder="placa del vehiculo">
        
        <button type="submit" class="btn btn-dark">cotizar</button>
    </form>

</div>
  
<table class="table">
    <thead>
      <tr>
        <th scope="col">titulo dato</th>
        <th scope="col">titulo dato</th>
        <th scope="col">titulo dato</th>
        <th scope="col">titulo dato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{/*soat[dato]*/}}</td>
        <td>{{/*soat[dato]*/}}</td>
        <td>{{/*soat[dato]*/}}</td>
      </tr>
     
    </tbody>
  </table>



@endsection
