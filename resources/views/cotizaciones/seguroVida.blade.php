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
<div class="container">
      <hr>
      <h1 class="text-left" style="color: #4a38a7;">Cotiza tu Seguro de Vida ahora!</h1>
      <hr>
      <form action="{{Route('rSeguroVida'), Route('guardarSeguro')}}" method="post" class="row g-3">
        @method('GET')
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
          <input type="text" class="form-control" id="nameUsuario" name="nameUsuario" required>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="mb-0 form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="mb-0 form-label">Edad</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="mb-0 form-label">Número de personas que dependen de usted</label>
          <select id="inputState" class="custom-select" name="dependientes" required>
              <option selected>Ninguna</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>Mas de 5</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputState" class="mb-0 form-label">Área que desempeña en su trabajo</label>
          <select id="inputState" class="custom-select" name="trabajo" required>
            <option selected>Seleccione...</option>
            <option value="Dir">• Dirección</option>
            <option value="RecHum">• Recursos Humanos</option>
            <option value="Produc">• Producción</option>
            <option value="TcCm">• Tecnologia o Comunicaciones</option>
            <option value="FnCon">• Finanzas o Contabilidad</option>
            <option value="Vts">• Ventas</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="mb-0 form-label">Ingresos neto Anual (Sin puntos ni comas)</label>
          <input type="number" class="form-control" id="ingresos" name="ingresos" required>
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="mb-0 form-label">Estado de salud</label>
          <select id="inputState" class="custom-select" name="salud" required>
            <option selected>Seleccione...</option>
            <option value="Mal">•	Malo</option>
            <option value="Reg">•	Regular</option>
            <option value="Bue">•	Bueno</option>
            <option value="Exc">•	Excelente</option>
          </select>
        </div>
        <div class="d-grid gap- col-mt-6 mx-auto mt-4">
          <button class="btn btn-primary" type="submit" style="background-color: #4a38a7; border: #fff; font-weight: bold;">Consulta tu Seguro de Vida!</button>
        </div>
        
      </form>
    </div>





@endsection
