@extends('layouts.layout')

@section('titulo', 'Cotizador Seguro de Vida')

@section('main')
<head>
    <style>
      .form-label{
        font-weight: bold;
      }
    </style>
</head>
<body>
<div class="container">
    <hr>
    <h1 class="text-left" style="color: #4a38a7;">Cotiza tu Seguro de Vida ahora!</h1>
    <hr>
    @if (\Session::has('enviado'))
      <div class="alert alert-success">
        <p>{{\Session::get('enviado')}}</p>
      </div>
    @endif                    
    <!-- Formulario para guardar y que redirecciona a las preguntas para calcular el seguro de vida -->
    <form action="{{('seguroGuardado')}}" method="POST" class="row g-3">
      @csrf
      <!--@method('GET')-->
          <div class="col-md-6">
            <label for="inputState" class="mb-0 form-label">Tipo de Documento</label>
            <select id="inputState" class="custom-select" name="document">
              <option selected>Seleccione...</option>
              <option>Cedula de Ciudadanía</option>
              <option>Tarjeta de Identidad</option>
              <option>Cedula de Extrangería</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="mb-0 form-label">Número de Documento de Identidad</label>
            <input type="number" class="form-control" id="identificacion" name="identificacion" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="mb-0 form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="mb-0 form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
          </div>
          <div class="col-md-12 text-center">
            <label for="inputPassword4" class="mb-0 form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
          </div>
          
          <div class="d-grid gap- col-mt-6 mx-auto mt-4">
            <button class="btn btn-primary" type="submit" style="background-color: #4a38a7; border: #fff; font-weight: bold;">Consulta tu Seguro de Vida</button>
          </div>
      </div>
    </form>
</div>

</body>

@endsection
